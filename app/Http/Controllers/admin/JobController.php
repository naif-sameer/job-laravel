<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
  // index
  public function index()
  {
    $jobs = Job::all()->where('is_active', 1);
    // $jobs = ['hi there'];

    return view('admin.job', compact('jobs'));
  }

  // add
  public function store(Request $request)
  {
    $job = new Job();

    $request->validate([
      'title' => 'required',
      'description' => 'required',
      'country' => 'required',
    ]);


    $job->title = $request->input('title');
    $job->description = $request->input('description');
    $job->country = $request->input('country');
    $job->save();

    return redirect('admin/jobs')->with('status', 'job added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'title' => 'required',
      'description' => 'required',
      'country' => 'required',
    ]);

    Job::where('id', $id)->update([
      'title' => $request->input('title'),
      "description" => $request->input('description'),
      "country" => $request->input('country')
    ]);

    return redirect('admin/jobs')->with('status', 'job edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Job::where('id', $id)->update([
      'is_active' => 0
    ]);

    return redirect('/admin/jobs')->with(['status' => 'Job deleted']);
  }
}
