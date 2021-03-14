<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\PostController;


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
})->name('welcome');

Route::get('/user', function() {
    return view('user');
})->name('user');

Route::get('/html', function() {
    return view('html');
})->name('html');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/portfolio', function() {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('post/add', function(){
    DB::table('post')->insert([
        'title' => 'SDU',
        'body' => 'Suleyman Demirel University (SDU)'
    ]);
});

Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function(){
    return view('post.create');
});

Route::post('post/create', [PostController::class, 'store'])->name('add-post');