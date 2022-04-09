<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
  // index
  public function index()
  {
    $sliders = Slider::all()->where('is_active', 1);
    // $sliders = ['hi there'];

    return view('admin.slider', compact('sliders'));
  }

  // add
  public function store(Request $request)
  {
    $slider = new Slider();

    $request->validate([
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
      'title' => 'required',
      'description' => 'required',
    ]);

    $file = $request->file('image');
    $file->store('images', ['disk' => 'assets']);

    $slider->title = $request->input('title');
    $slider->description = $request->input('description');
    $slider->image = $file->hashName();
    $slider->save();

    return redirect('admin/sliders')->with('status', 'slider added');
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

    Slider::where('id', $id)->update($data);


    return redirect('admin/sliders')->with('status', 'slider edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Slider::where('id', $id)->update([
      'is_active' => 0
    ]);

    return redirect('/admin/sliders')->with(['status' => 'Slider deleted']);
  }
}
