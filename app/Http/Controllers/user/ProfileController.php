<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    return view('user.user-info');
  }


  public function courses()
  {
    return view('user.courses');
  }


  public function education()
  {
    return view('user.education');
  }


  public function experience()
  {
    return view('user.experience');
  }


  public function skills()
  {
    return view('user.skills');
  }
}
