<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
Use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\User\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\BookingController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create-admin', function () {
    Admin::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('12345678'), // ضروري تشفير الباسورد
    ]);

    return 'تم إنشاء مشرف بنجاح';
});
// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
//         Route::resource('admins', AdminController::class);

// });

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // لوحة التحكم بعد تسجيل الدخول
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
                Route::resource('admins', AdminController::class);
                 Route::resource('bookings', BookingController::class);

    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::get('/home', [UserController::class, 'home'])->name('home');
    Route::resource('bookings', BookingController::class);
});


require __DIR__.'/auth.php';
