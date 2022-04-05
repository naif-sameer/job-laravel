<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\user\ProfileController;

use App\Http\Controllers\web\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/profile', [HomeController::class, 'profile']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/companies', [HomeController::class, 'companies']);

Route::get('/job', [HomeController::class, 'job']);

Route::get('/contact-us', [HomeController::class, 'contactUs']);

Route::get('/login', [HomeController::class, 'login']);

Route::get('/signup', [HomeController::class, 'signup']);


// user dashboard
Route::prefix('profile')->group(function () {
  Route::get('/user-info',  [ProfileController::class, 'index']);

  Route::get('/courses', [ProfileController::class, 'courses']);

  Route::get('/education', [ProfileController::class, 'education']);

  Route::get('/experience', [ProfileController::class, 'experience']);

  Route::get('/skills', [ProfileController::class, 'skills']);
});

// admin dashboard
Route::prefix('admin')->group(function () {
  Route::get('/',  [AdminController::class, 'index']);
  Route::get('/sliders',  [SliderController::class, 'index']);
  Route::get('/jobs',  [JobController::class, 'index']);
  Route::get('/about',  [AboutController::class, 'index']);
  Route::get('/companies',  [CompanyController::class, 'index']);
  Route::get('/services',  [ServiceController::class, 'index']);
});
