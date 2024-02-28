<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ForgetPasswordController;




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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('register', function () {
    return view('register');
});

Route::get("/signup", [RegisterController::class, "index"])->name("signupPage");
Route::post("/register", [RegisterController::class, "register"])->name("signup");

Route::get("/login", [LoginController::class, "index"])->name("loginPage");
Route::post("/validate", [LoginController::class, "login"])->name("login");
Route::post("/logout", [LoginController::class, "logout"])->name("logout");


Route::get("/resetPassword", [ForgetPasswordController::class, "resetPassword"])->name('resetPasswordPage');
Route::get("/forgetPassword", [ForgetPasswordController::class, "index"])->name("forgetPasswordPage");

Route::get("/verification", [VerificationController::class, "index"])->name("verificationPage");

Route::get("/user", [UserController::class, "index"])->name("userPage");

Route::post("/store", [ListController::class, "store"])->name("saveList");
Route::get("/lists", [ListController::class, "show"])->name("lists");








