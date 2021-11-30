<?php

use Illuminate\Support\Facades\Route;
// Added use App\Post class
use App\Post;
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
    // return view('welcome');
    // return view('posts.index');
    $posts = Post::all();
        return view ('posts.index', compact('posts'));
});
Route::resource('/post','PostController');
Route::resource('/comment','CommentController');
