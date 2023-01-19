<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('tampil',[PostController::class,'tampil']);
Route::get('delete/{id}',function($id){
    // $model= new Post;
    // $model->delete();
    $model=Post::find($id);
    $model->delete();
    return redirect('add-blog-post-form')->with('status-deleted', 'Blog Post Form Data Has Been deleted');
});