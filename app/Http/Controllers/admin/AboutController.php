<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  // index
  public function index()
  {
    $about = AboutUs::all()->where('is_active', 1);
    // $about = ['hi there'];

    return view('admin.about', compact('about'));
  }

  // add
  public function store(Request $request)
  {
    $about = new AboutUs();

    $request->validate([
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      'title' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('image');
    $file->store('images', ['disk' => 'assets']);

    $about->title = $request->input('title');
    $about->description = $request->input('description');
    $about->image = $file->hashName();
    $about->save();

    return redirect('admin/about')->with('status', 'about added');
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

    AboutUs::where('id', $id)->update($data);


    return redirect('admin/about')->with('status', 'about edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = AboutUs::where('id', $id)->update([
      'is_active' => 0
    ]);

    return redirect('/admin/about')->with(['status' => 'AboutUs deleted']);
  }
}
