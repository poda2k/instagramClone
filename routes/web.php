<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\userController;
use App\Middleware\checkForSession;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/users/login',function(){
    return view('users.logIn',[
        'message'=>''
    ]);
})->name('login');
Route::view('/users/register','users.signUp')->name('getSignUp');
Route::post('/users/login',[userController::class,'logIn'])->name('login');
Route::post('/users/register',[userController::class,'signup'])->name('postSignUp');


Route::group(['middleware'=>'checkForSession'],function(){
    Route::resource('/',postController::class);
    Route::get('/userHome',function () {
        return view('users.userHome');
    })->name('userHome');
    Route::post('/logout',[userController::class,'logOut'])->name('logout');
});