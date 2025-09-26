<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'postLogin'])->name('login');

Route::get('/register', [App\Http\Controllers\Admin\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Admin\RegisterController::class, 'postRegister'])->name('register');

Route::get('/logout', [App\Http\Controllers\Admin\LogoutController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('index');

Route::get('/admin/quan-ly-ban', [App\Http\Controllers\Admin\TableController::class, 'index'])->name('quan-ly-ban');
Route::get('/admin/quan-ly-danh-muc', [App\Http\Controllers\Admin\DanhMucController::class, 'index'])->name('quan-ly-danh-muc');
Route::get('/admin/quan-ly-san-pham', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('quan-ly-san-pham');
Route::get('/admin/quan-ly-don-hang', [App\Http\Controllers\Admin\DonHangController::class, 'index'])->name('quan-ly-don-hang');
Route::get('/admin/quan-ly-nhan-vien', [App\Http\Controllers\Admin\NhanVienController::class, 'index'])->name('quan-ly-nhan-vien');
Route::get('/admin/quan-ly-khach-hang', [App\Http\Controllers\Admin\KhachHangController::class, 'index'])->name('quan-ly-khach-hang');