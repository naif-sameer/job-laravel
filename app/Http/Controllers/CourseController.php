<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
  // index
  public function index()
  {
    $courses = Course::all()->where('is_active', 1);
    return view('user.courses', compact('courses'));
  }


  // add
  public function store(Request $request)
  {
    $course = new Course();

    $request->validate([
      'title' => 'required',
      'course_date' => 'required',
      'description' => 'required',
    ]);

    $course->title = $request->input('title');
    $course->course_date = $request->input('course_date');
    $course->description = $request->input('description');
    $course->save();

    return redirect('profile/courses')->with('status', 'course added');
  }

  // edit
  public function update(Request $request)
  {
    $id = $request->id;

    $request->validate([
      'title' => 'required',
      'course_date' => 'required',
      'description' => 'required',
    ]);

    Course::where('id', $id)->update([
      'title' => $request->input('title'),
      'course_date' => $request->input('course_date'),
      'description' => $request->input('description'),
    ]);

    return redirect('profile/courses')->with('status', 'course edited');
  }

  // delete
  public function destroy(Request $request)
  {
    $id = $request->id;

    $result = Course::where('id', $id)->update(['is_active' => 0]);

    return redirect('profile/courses')->with(['status' => 'Course deleted']);
  }
}
