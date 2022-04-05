<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('web.index');
  }

  public function profile()
  {
    return view('web.profile');
  }

  public function about()
  {
    return view('web.about');
  }

  public function companies()
  {
    return view('web.companies');
  }

  public function contactUs()
  {
    return view('web.contact-us');
  }

  public function job()
  {
    return view('web.job');
  }

  public function services()
  {
    return view('web.services');
  }

  public function login()
  {
    return view('web.login');
  }

  public function signup()
  {
    return view('web.signup');
  }
}
