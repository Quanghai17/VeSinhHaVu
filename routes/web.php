<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
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

Route::get('clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
//    Artisan::call('cms:publish:assets');
//    Artisan::call('storage:link');
    return 'xong';
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([], function (){
   
    Route::resource('/',\Frontend\HomeController::class);
   
    Route::resource('/field',\Frontend\FieldOfActivityController::class);
   
    Route::resource('/product',\Frontend\ProductController::class);
   
    Route::resource('ticket', \App\Http\Controllers\Frontend\TicketController::class);
    
    Route::get('/lien-he',"\App\Http\Controllers\Frontend\ContactController@index")->name('contact');
    
    Route::get('/gioi-thieu',"\App\Http\Controllers\Frontend\AboutController@index")->name('about');
    
    Route::get('/staticdatas',"\App\Http\Controllers\Frontend\ServiceController@index")->name('staticdatas');
    Route::get('/staticdatas/{slug}',"\App\Http\Controllers\Frontend\ServiceController@show")->name('service.detail');
    
    Route::get('/blogs',"\App\Http\Controllers\Frontend\PostController@index")->name('blogs');
    Route::get('/blogs/{slug}',"\App\Http\Controllers\Frontend\PostController@blogDetail")->name('blog.detail');
    
    Route::get('/recruits',"\App\Http\Controllers\Frontend\RecruitController@index")->name('recruits');
    Route::get('/recruits/{slug}',"\App\Http\Controllers\Frontend\RecruitController@show")->name('show.detail');

    Route::get('/category/{slug}',"\App\Http\Controllers\Frontend\PostController@PostByCategory")->name('category');
  
    Route::resource('pages',\Frontend\PageController::class);
   
    Route::post('/feedback',"\App\Http\Controllers\Frontend\FeedbackController@store")->name('feedback');
   
    Route::resource('/contact', \Frontend\ContactController::class);

   
    Route::get('/search',"\App\Http\Controllers\Frontend\PostController@Search")->name('search');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('sitemap-create', function () {
  Artisan::call('sitemap:create');

  return 'xong';
});