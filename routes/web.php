<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Model\Post;


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

Route::get('/main', function(){
    return view('main');
});

Route::get('post\add', function(){
    DB::table('post')->insert([
        'title' => 'SDU',
        'body' => 'Suleyman Demirel University (SDU) is one of the first private higher education institutions in Kazakhstan. It is situated in the mountainous town of Kaskelen, 20km from Almaty city center. The University was founded in 1996 and opened by the president of the country Nursultan Nazarbayev. SDU currently has four faculties: Education & Humanities, Engineering & Natural Sciences, Law & Social Sciences, and the Business School.'
    ]);
});

Route::get('post', function () { 
    $post = Post::find(1); 
    return $post;
});

