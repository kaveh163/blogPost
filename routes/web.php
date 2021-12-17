<?php


use Illuminate\Support\Facades\Route;
// Added use App\Post class
use App\Post;
use Illuminate\Support\Facades\Log;
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
    // error_log("I'm here");
    //     $posts = Post::all();
    //     dd($posts);
    //     error_log("I'm Further");
        
    //     return view ('pages.index', compact('posts2'));
        $posts2 = Post::all();
        error_log("I'm here");
        // Log::debug((array) $posts);
        // dd($posts);
        return view ('pages.index', compact('posts2'));
});
Route::resource('/post','PostController');
Route::resource('/comment','CommentController');

