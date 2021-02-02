<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//story
Route::get('/story/index', 'App\Http\Controllers\StoryController@index')->name('story');
Route::post('/story', 'App\Http\Controllers\StoryController@new')->name('story.add');
// Route::post('/story/like', 'App\Http\Controllers\StoryController@like');


//mystory
// Route::get('/mystory/{id}', 'App\Http\Controllers\MyStoryController@newMy')->name('mystory');
