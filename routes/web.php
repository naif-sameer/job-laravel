<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\UserExperienceController;
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

  // experiences
  Route::get('/experiences', [UserExperienceController::class, 'index']);
  Route::post('/experiences', [UserExperienceController::class, 'store']);
  Route::put('/experiences/{id}', [UserExperienceController::class, 'update']);
  Route::delete('/experiences/{id}', [UserExperienceController::class, 'destroy']);

  Route::get('/skills', [ProfileController::class, 'skills']);
});

// admin dashboard
Route::prefix('admin')->group(function () {
  Route::get('/',  [AdminController::class, 'index']);

  // sliders
  Route::get('/sliders',  [SliderController::class, 'index']);
  Route::post('/sliders', [SliderController::class, 'store'])->name('add-slider');
  Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('update-slider');
  Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('delete-slider');

  // jobs
  Route::get('/jobs',  [JobController::class, 'index']);
  Route::post('/jobs', [JobController::class, 'store'])->name('add-job');
  Route::put('/jobs/{id}', [JobController::class, 'update'])->name('update-job');
  Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('delete-job');

  // companies
  Route::get('/companies',  [CompanyController::class, 'index']);
  Route::post('/companies', [CompanyController::class, 'store'])->name('add-company');
  Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('update-company');
  Route::delete('/companies/{id}', [CompanyController::class, 'destroy'])->name('delete-company');

  // about
  Route::get('/about',  [AboutController::class, 'index']);
  Route::post('/about', [AboutController::class, 'store'])->name('add-about');
  Route::put('/about/{id}', [AboutController::class, 'update'])->name('update-about');
  Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('delete-about');


  // services
  Route::get('/services',  [ServiceController::class, 'index']);
  Route::post('/services', [ServiceController::class, 'store'])->name('add-service');
  Route::put('/services/{id}', [ServiceController::class, 'update'])->name('update-service');
  Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('delete-service');
});
