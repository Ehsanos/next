<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Enums\OrderStatusEnum;
use App\Http\Controllers\AgentContoller;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DelegteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailTestingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscribeController;
use App\Models\Catalog;
use App\Models\Country;


Route::get('/sendemail', [IndexController::class, 'sendemail'])->name('send_email');

Route::get('/log', [IndexController::class, 'login'])->name('login');

Route::get('/languages/{lang}', [IndexController::class, 'change_lang'])->name('change.lang');
Route::post('/sub', [SubscribeController::class, 'store'])->name('sub');

Route::name('langs.')->middleware('locale')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/products/{catId?}/{depId?}', [ProductController::class, 'index'])->name('products');
    Route::get('/details/{data}', [ProductController::class, 'show'])->name('product_details');
    Route::get('/catalogs', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/posts', [PostController::class, 'index'])->name('news');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('showPost');
    Route::get('/agents', [AgentContoller::class, 'index'])->name('agents');
    Route::get('/delegte', [DelegteController::class, 'index'])->name('delegte');
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/order/{data}', [OrderController::class, 'show'])->name('order_details');
    Route::get('/about', [IndexController::class, 'about'])->name('about');
    Route::get('/search', [ProductController::class, 'search'])->name('search');
    Route::get('/profile', [ProductController::class, 'profile'])->name('profile');
    Route::get('/user/{id}', [UserController::class, 'edit'])->name('user_edit');
    Route::post('add_to_cart', [CartController::class, 'addToCart'])->name('addToCart')->middleware('verified');
    Route::get('delcart/{id}', [CartController::class, 'destroy'])->name('delCart')->middleware('verified');
    Route::post('/createOrder', [OrderController::class, 'create'])->name('create_order')->middleware('verified');
    Route::post('/setimg', [UserController::class, 'addimg'])->name('setImg');
    Route::get('/cat/{data}',[CategoryController::class,'show'])->name('category');
    Route::get('/allcat/{cat}',[CategoryController::class,'show'])->name('fofo');
    Route::get('/policy',[JobController::class,'index'])->name('policy');
    Route::get('/share/{id}',[ShareController::class,'share'])->name('share');


    Route::get('/test', [IndexController::class, 'test']);


});

Route::get('country', [CountryController::class, 'index'])->name('country');
Route::get('/slider', [SliderController::class, 'index'])->name('allslider');
Route::get('/start', [MailTestingController::class, 'start']);
Route::get('/ship', [MailTestingController::class, 'ship']);
Route::get('/complete', [MailTestingController::class, 'complete']);


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
