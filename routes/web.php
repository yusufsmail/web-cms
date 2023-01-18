<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\CategoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutearticleProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/post', [PostController::class ,'index' ]);
// Route::get('/post', [PostController::class ,'show' ]);
Route::get('/content/{category}/{post}', [PostController::class, 'selengkapnya'])->name('selengkapnya');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/categories', function){
//     return view('categories', [
//         'title' => 'Post Categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// }

Route::get('/dashboard', function(){

    return view ('dashboard.index');
    
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug' , [DashboardPostController::class, 'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/categories/{category:slug}', function(Category $category){
    return view ('category', [
        'title' => $category ->name,
        'posts' => $category ->posts,
        'category' => $category ->name
    ]);
});



// Route::get('/content/{category:slug}/{{post:slug}}', function(Post $post){
//     return view ('', [
//         'title' => $post ->name,
//         'category' => $post ->category,
//         'posts' => $post ->name
//     ]);
// });