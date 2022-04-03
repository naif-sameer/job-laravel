<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/about', [AboutController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/companies', [CompanyController::class, 'index']);

Route::get('/job', [JobController::class, 'index']);

Route::get('/contact-us', [ContactUsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/signup', [SignupController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/dashboard/user-info',  [DashboardController::class, 'index']);


Route::get('/dashboard/courses', [DashboardController::class, 'courses']);


Route::get('/dashboard/education', [DashboardController::class, 'education']);

Route::get('/dashboard/experience', [DashboardController::class, 'experience']);

Route::get('/dashboard/skills', [DashboardController::class, 'skills']);
