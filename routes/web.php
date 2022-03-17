<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Models\Video;
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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/videos',[VideoController::class,'index']);
Route::get('/factory', function () {
   return Video::factory()->create();
});*/

Route::get('/index',[IndexController::class,'index'])->name('index');
Route::get('/videos/create',[VideoController::class,'create'])->name('videos.create');
Route::post('/videos',[VideoController::class,'store'])->name('videos.store');

