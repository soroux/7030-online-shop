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
Route::get('/contacts',[\App\Http\Controllers\HomeController::class,'contacts'])->name('contacts');
Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');

Route::get('/blog/{post}/post',[\App\Http\Controllers\HomeController::class,'viewPost'])->name('blog.post');
Route::post('/blog/{post}/comment',[\App\Http\Controllers\HomeController::class,'createComment'])->name('create.comment');


Route::get('/products/{product}/quickView',[\App\Http\Controllers\HomeController::class,'quickView'])->name('quick.view');
Route::get('/products/{product}/view',[\App\Http\Controllers\HomeController::class,'view'])->name('view');
Route::post('/products/{product}/review',[\App\Http\Controllers\HomeController::class,'createReview'])->name('create.review');




Route::get('/add/{product}',[\App\Http\Controllers\CartController::class,'addOne'])->name('add.cart.one');
Route::post('/add/{product}',[\App\Http\Controllers\CartController::class,'add'])->name('add.cart');
Route::post('/add/{product}/product',[\App\Http\Controllers\CartController::class,'addDetails'])->name('add.cart.details');

Route::get('/view/cart',[\App\Http\Controllers\CartController::class,'view'])->name('view.cart');
Route::get('/view/cart/{cart}/remove',[\App\Http\Controllers\CartController::class,'remove'])->name('remove.cart');
Route::patch('/view/cart/update',[\App\Http\Controllers\CartController::class,'update'])->name('update.cart');
Route::get('/view/shipInfo',[\App\Http\Controllers\CartController::class,'shipInfo'])->name('ship.info');

Route::get('/view/send/{bill}/mail',[\App\Http\Controllers\CartController::class,'sendBill'])->name('send.bill.email');
Route::get('/view/send/{ship}/mail',[\App\Http\Controllers\CartController::class,'sendShip'])->name('send.ship.email');



Route::post('/view/bill/purchase',[\App\Http\Controllers\PayrecieptController::class,'purchase'])->name('cart.purchase');
Route::get('/view/bill/verify',[\App\Http\Controllers\PayrecieptController::class,'verify'])->name('cart.verify');
Route::get('/view/bill/{bill}/verified',[\App\Http\Controllers\PayrecieptController::class,'verified'])->name('verified.purchase');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/sales',[\App\Http\Controllers\DashboardController::class,'sales'])->name('dashboard.sales');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/sale/{sale}/view',[\App\Http\Controllers\DashboardController::class,'saleView'])->name('dashboard.sale.view');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products',[\App\Http\Controllers\ProductController::class,'index'] )->name('dashboard.products');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products/create',[\App\Http\Controllers\ProductController::class,'create'] )->name('dashboard.products.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/product/store',[\App\Http\Controllers\ProductController::class,'store'] )->name('dashboard.product.store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/product/{product}/destroy',[\App\Http\Controllers\ProductController::class,'destroy'] )->name('dashboard.product.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/product/{product}/edit',[\App\Http\Controllers\ProductController::class,'edit'] )->name('dashboard.product.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/product/{product}/update',[\App\Http\Controllers\ProductController::class,'update'] )->name('dashboard.product.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/Posts',[\App\Http\Controllers\PostController::class,'index'] )->name('dashboard.posts');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/Posts/create',[\App\Http\Controllers\PostController::class,'create'] )->name('dashboard.posts.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/Post/store',[\App\Http\Controllers\PostController::class,'store'] )->name('dashboard.post.store');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/Post/{post}/destroy',[\App\Http\Controllers\PostController::class,'destroy'] )->name('dashboard.post.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/Post/{post}/edit',[\App\Http\Controllers\PostController::class,'edit'] )->name('dashboard.post.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/Post/{post}/update',[\App\Http\Controllers\PostController::class,'update'] )->name('dashboard.post.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/hero',[\App\Http\Controllers\WebsiteDesignController::class,'indexHero'] )->name('dashboard.hero');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/categories',[\App\Http\Controllers\WebsiteDesignController::class,'indexCategories'] )->name('dashboard.categories');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/hero/{hero}/edit',[\App\Http\Controllers\WebsiteDesignController::class,'editHero'] )->name('dashboard.hero.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/hero/{hero}/update',[\App\Http\Controllers\WebsiteDesignController::class,'updateHero'] )->name('dashboard.hero.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/category/{category}/edit',[\App\Http\Controllers\WebsiteDesignController::class,'editCategory'] )->name('dashboard.category.edit');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/category/{category}/update',[\App\Http\Controllers\WebsiteDesignController::class,'updateCategory'] )->name('dashboard.category.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/comments',[\App\Http\Controllers\CommentController::class,'index'] )->name('dashboard.comments');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/comment/edit',[\App\Http\Controllers\CommentController::class,'edit'] )->name('dashboard.comment.edit');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/comment/delete',[\App\Http\Controllers\CommentController::class,'delete'] )->name('dashboard.comment.delete');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/reviews',[\App\Http\Controllers\ReviewController::class,'index'] )->name('dashboard.reviews');
Route::middleware(['auth:sanctum', 'verified'])->patch('/dashboard/review/edit',[\App\Http\Controllers\ReviewController::class,'edit'] )->name('dashboard.review.edit');
Route::middleware(['auth:sanctum', 'verified'])->delete('/dashboard/review/delete',[\App\Http\Controllers\ReviewController::class,'delete'] )->name('dashboard.review.delete');






