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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/shop',[\App\Http\Controllers\HomeController::class,'shop'])->name('shop');
Route::get('/blog',[\App\Http\Controllers\HomeController::class,'blog'])->name('blog');
Route::get('/blog/{post}/post',[\App\Http\Controllers\HomeController::class,'viewPost'])->name('blog.post');
Route::get('/{product}/quickView',[\App\Http\Controllers\HomeController::class,'quickView'])->name('quick.view');
Route::get('/{product}/view',[\App\Http\Controllers\HomeController::class,'view'])->name('view');

Route::get('/add/{product}',[\App\Http\Controllers\CartController::class,'addOne'])->name('add.cart.one');
Route::post('/add/{product}',[\App\Http\Controllers\CartController::class,'add'])->name('add.cart');
Route::get('/view/cart',[\App\Http\Controllers\CartController::class,'view'])->name('view.cart');
Route::get('/view/bill',[\App\Http\Controllers\CartController::class,'bill'])->name('view.bill');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/admin/dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products',[\App\Http\Controllers\ProductController::class,'index'] )->name('dashboard.products');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products/create',[\App\Http\Controllers\ProductController::class,'create'] )->name('dashboard.products.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/product/store',[\App\Http\Controllers\ProductController::class,'store'] )->name('dashboard.product.store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/product/{product}/destroy',[\App\Http\Controllers\ProductController::class,'destroy'] )->name('dashboard.product.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/product/{product}/edit',[\App\Http\Controllers\ProductController::class,'edit'] )->name('dashboard.product.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/product/{product}/update',[\App\Http\Controllers\ProductController::class,'update'] )->name('dashboard.product.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/Posts',[\App\Http\Controllers\PostController::class,'index'] )->name('dashboard.posts');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/Posts/create',[\App\Http\Controllers\PostController::class,'create'] )->name('dashboard.posts.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/Post/store',[\App\Http\Controllers\PostController::class,'store'] )->name('dashboard.post.store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/product/{post}/destroy',[\App\Http\Controllers\PostController::class,'destroy'] )->name('dashboard.post.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/product/{post}/edit',[\App\Http\Controllers\PostController::class,'edit'] )->name('dashboard.post.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/product/{post}/update',[\App\Http\Controllers\PostController::class,'update'] )->name('dashboard.post.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/hero',[\App\Http\Controllers\WebsiteDesignController::class,'indexHero'] )->name('dashboard.hero');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/categories',[\App\Http\Controllers\WebsiteDesignController::class,'indexCategories'] )->name('dashboard.categories');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/hero/{hero}/edit',[\App\Http\Controllers\WebsiteDesignController::class,'editHero'] )->name('dashboard.hero.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/hero/{hero}/update',[\App\Http\Controllers\WebsiteDesignController::class,'updateHero'] )->name('dashboard.hero.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/category/{category}/edit',[\App\Http\Controllers\WebsiteDesignController::class,'editCategory'] )->name('dashboard.category.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/category/{category}/update',[\App\Http\Controllers\WebsiteDesignController::class,'updateCategory'] )->name('dashboard.category.update');



