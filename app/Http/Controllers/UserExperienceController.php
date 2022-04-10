<?php

namespace App\Http\Controllers;

use App\Models\UserExperience;
use Illuminate\Http\Request;

class UserExperienceController extends Controller
{
  // index
  public function index()
  {
    $experiences = UserExperience::all()->where('is_active', 1);
    // dd($experiences);
    return view('user.experience', compact('experiences'));
  }


  // add
  public function store(Request $request)
  {
    $experience = new UserExperience();

    $request->validate([
      'title' => 'required',
      'country' => 'required',
      'work_time' => 'required',
      'description' => 'required',
    ]);


    $experience->title = $request->input('title');
    $experience->country = $request->input('country');
    $experience->work_time = $request->input('work_time');
    $experience->description = $request->input('description');
    $experience->save();

    return redirect('profile/experiences')->with('status', 'experience added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'title' => 'required',
      'country' => 'required',
      'work_time' => 'required',
      'description' => 'required',
    ]);

    UserExperience::where('id', $id)->update([
      'title' => 'required',
      'country' => 'required',
      'work_time' => 'required',
      'description' => 'required',
    ]);


    return redirect('profile/experiences')->with('status', 'experience edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = UserExperience::where('id', $id)->update(['is_active' => 0]);

    return redirect('profile/experiences')->with(['status' => 'UserExperience deleted']);
  }
}
