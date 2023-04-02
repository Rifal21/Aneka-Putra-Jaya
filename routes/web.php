<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardOutletController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPenggunaController;
use App\Models\Outlet;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class , 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produkdet/{produk:slug}', [ProdukController::class, 'show']);

Route::get('/categories' , function() {
  return view('categories' , [
      'title' => "Semua Kategori Produk",
      'categories' => Category::all(),
      'outlet' => Outlet::all()
  ]);
});


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('admin');

Route::get('/profile/{users:username}' , function(User $user) {
  return view('profile.index' , [
    'title' => 'Profile ' . $user->name,
    'user' => $user,
    'outlet' => Outlet::all()
  ]);
});


Route::get('/dashboard/produk/checkSlug' , [DashboardProdukController::class , 'checkSlug'])->middleware('auth');
Route::get('/dashboard/categories/checkSlug' , [DashboardCategoryController::class , 'checkSlug'])->middleware('auth');
Route::get('/dashboard/outlet/checkSlug' , [DashboardOutletController::class , 'checkSlug'])->middleware('auth');

Route::middleware('admin')->group(function () { 
  Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show');
  Route::resource('/dashboard/produk', DashboardProdukController::class);
  Route::resource('/dashboard/outlet', DashboardOutletController::class);
});

Route::get('/dashboard/pengguna/', [DashboardPenggunaController::class , 'index'])->middleware('admin');
Route::get('/dashboard/pengguna/create', [DashboardPenggunaController::class , 'create'])->middleware('admin');
Route::post('/dashboard/pengguna', [DashboardPenggunaController::class , 'store'])->middleware('admin');
Route::put('/dashboard/pengguna/{user:username}', [DashboardPenggunaController::class , 'update'])->middleware('admin');
Route::get('/dashboard/pengguna/{user:username}', [DashboardPenggunaController::class , 'show'])->middleware('admin');
Route::get('/dashboard/pengguna/{user:username}/edit', [DashboardPenggunaController::class , 'edit'])->middleware('admin');
Route::delete('/dashboard/pengguna/{user:username}', [DashboardPenggunaController::class , 'destroy'])->middleware('admin');
// Route::resource('/dashboard/pengguna', DashboardPenggunaController::class)->middleware('admin');

Route::get('/tentang' , function() {
  return view('tentang', [
    'title' => 'Tentang Kami',
    'outlet' => Outlet::all()
  ]);
});
