<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
  // index
  public function index()
  {
    $skills = Skill::all()->where('is_active', 1);
    // dd($skills);
    return view('user.skills', compact('skills'));
  }


  // add
  public function store(Request $request)
  {
    $skill = new Skill();

    $request->validate([
      'title' => 'required',
      'progress' => 'required',
    ]);

    $skill->title = $request->input('title');
    $skill->progress = $request->input('progress');
    $skill->save();

    return redirect('profile/skills')->with('status', 'skill added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'title' => 'required',
      'progress' => 'required',
    ]);

    Skill::where('id', $id)->update([
      'title' => $request->input('title'),
      'progress' => $request->input('progress'),
    ]);

    return redirect('profile/skills')->with('status', 'skill edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Skill::where('id', $id)->update(['is_active' => 0]);

    return redirect('profile/skills')->with(['status' => 'Skill deleted']);
  }
}
