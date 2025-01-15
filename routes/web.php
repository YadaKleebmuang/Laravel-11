<?php

// use เพิ่อเรียกใช้งาน
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\ProfileController;
use App\Models\Role;
use Symfony\Component\HttpKernel\Profiler\Profile;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
    return view('about');
});
Route::controller (PostController::class)->group(function(){
    Route::get('/home','index');
    Route::get('/create','create');
});
Route::controller (JoinController::class)->group(function(){
    Route::get('/inner-join','InnerJoin');
    Route::get('/left-join','LeftJoin');
    Route::get('/right-join','RightJoin');
    Route::get('/full-outer-join','FullOuterJoin');
});

Route::controller(EloquentController::class)->group(function(){
    //1:1
    Route::get('/add-programmer','addProgrammer');
    Route::get('/project-programmer/{id}','ProjectByProgrammerId');
    //1:M
    Route::get('/add-book/{id}','addBook');
    Route::get('/book-programmer/{id}','BookByProgrammer');
    //M:M
    Route::get('/add-role','addRole');
    Route::get('/add-user','addUser');
    Route::get('/role-user/{id}','RoleByUser');
    Route::get('/user-role/{id}','UserByRole'); //ดึงข้อมูลของ user ออกมา โดยใช้รหัสของตำแหน่งนั้นๆ
});

Route::middleware('guest')->group(function()
{
    Route::get('/register',[AuthenController::class,'register']);
    Route::post('/register/authenticate',[AuthenController::class,'store'])->name('register.auth');
    Route::post('/login',[AuthenController::class,'Login'])->name('Login');
    Route::post('/login/authenticate',[AuthenController::class,'Authen'])->name('login.authenticate');
});

Route::middleware('auth')->group(function()
{
    Route::view('/home','home')->name('home');
    Route::get('/logout',[AuthenController::class,'Logout'])->name('logout');
});

Route::resource('/profiles', ProfileController::class);