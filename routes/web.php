<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;     

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [SiteController::class,'home'])->name('home');
Route::get('/blog', [SiteController::class, 'blog',''])->name('blog');
Route::get('/blogsingle',[SiteController::class,'blogsingle'])->name('blogsingle');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');
Route::get('/project',[SiteController::class,'project'])->name('project');
Route::get('/service',[SiteController::class,'service'])->name('service');
Route::get('/team',[SiteController::class,'team'])->name('team');
Route::get('/about', [SiteController::class,'about'])->name('about');
