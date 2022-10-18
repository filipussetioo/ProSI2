<?php

use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Form;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent:: class);

Route::get('/shop', ShopComponent:: class);

Route::get('/cart', CartComponent:: class);

Route::get('/checkout', CheckoutComponent:: class);

Route::get('/forms', App\Http\Livewire\Forms:: class)->name('forms');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//buat user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//buat admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/promo',App\Http\Livewire\Admin\PromoComponent::class)->name('admin.promo');
    Route::get('/admin/tambahpromo',App\Http\Livewire\Admin\TambahPromoComponent::class)->name('admin.tambahpromo');
});