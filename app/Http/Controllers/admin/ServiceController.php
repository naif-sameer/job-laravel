<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  // index
  public function index()
  {
    $services = Service::all()->where('is_active', 1);
    // $services = ['hi there'];

    return view('admin.service', compact('services'));
  }

  // add
  public function store(Request $request)
  {
    $service = new Service();

    $request->validate([
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      'title' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('image');
    $file->store('images', ['disk' => 'assets']);

    $service->title = $request->input('title');
    $service->description = $request->input('description');
    $service->image = $file->hashName();
    $service->save();

    return redirect('admin/services')->with('status', 'service added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'title' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('image');

    $data = [
      'title' => $request->input('title'),
      "description" => $request->input('description')
    ];

    if ($file) {
      $file->store('images', ['disk' => 'assets']);
      $data['image'] = $file->hashName();
    }

    Service::where('id', $id)->update($data);


    return redirect('admin/services')->with('status', 'service edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Service::where('id', $id)->update([
      'is_active' => 0
    ]);

    return redirect('/admin/services')->with(['status' => 'Service deleted']);
  }
}
