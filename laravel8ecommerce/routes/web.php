<?php

use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminKurirComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\TambahPromoComponent;
use App\Http\Livewire\Admin\AdminTambahKurirComponent;
use App\Http\Livewire\Admin\PromoComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditPromoComponent;
use App\Http\Livewire\Admin\AdminEditKurirComponent;
use App\Http\Livewire\Owner\OwnerCategoryComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Form;
use App\Http\Livewire\Owner\OwnerDashboardComponent;

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
    Route::get('/shop', ShopComponent:: class);
});

//buat admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/categories/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/promo',App\Http\Livewire\Admin\PromoComponent::class)->name('admin.promo');
    Route::get('/admin/tambahpromo',App\Http\Livewire\Admin\TambahPromoComponent::class)->name('admin.tambahpromo');
    Route::get('/admin/kurir',AdminKurirComponent::class)->name('admin.kurir');
    Route::get('/admin/kurir/tambah',AdminTambahKurirComponent::class)->name('admin.tambahkurir');
    Route::get('/admin/promo/edit/{promo_kode}',AdminEditPromoComponent::class)->name('admin.editpromo');
    Route::get('/admin/kurir/edit/{kurir_id}',AdminEditKurirComponent::class)->name('admin.editkurir');
});

//owner
Route::middleware(['auth:sanctum','verified','authowner'])->group(function(){
    Route::get('/owner/dashboard',OwnerDashboardComponent::class)->name('owner.dashboard');
    Route::get('/owner/categories',OwnerCategoryComponent::class)->name('owner.categories');
    Route::get('/owner/promo',App\Http\Livewire\Owner\OwnerPromoComponent::class)->name('owner.promo');
    Route::get('/owner/tambahpromo',App\Http\Livewire\Owner\OwnerTambahPromoComponent::class)->name('owner.tambahpromo');
    Route::get('/owner/product',App\Http\Livewire\Owner\OwnerProductComponent::class)->name('owner.product');
    Route::get('/owner/tambahproduct',App\Http\Livewire\Owner\OwnerTambahProductComponent::class)->name('owner.tambahproduct');
});