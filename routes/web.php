<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\AdminEstheticienController;

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
})->name('/');
Route::middleware('guest')->group(function(){
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/logined', [LoginController::class,'login'])->name('logined');
});


Route::middleware('auth')->group(function(){
    Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
});
// Route::get('/estheticien/index', [RegisterController::class, 'index'])->name('estheticien.index');
Route::get('estheticien.index', function () {
    return view('estheticien.index');
})->name('estheticien.index');

Route::middleware(['auth','role:user'])->group(function(){
    Route::get('user.index', function () {
        return view('user.index');
    })->name('user.index');



    
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Other routes...
    Route::get('/admin/users', [RegisterController::class, 'showAllUsers'])->name('admin.users');
    Route::get('admin.index', [RegisterController::class,'showAllUsers'])->name('admin.index');
    Route::put('/users/{user}/ban', [RegisterController::class, 'banUser'])->name('admin.users.ban');
    Route::get('/estheticiens', [AdminEstheticienController::class, 'index'])->name('admin.estheticiens.index');
    Route::get('/estheticiens/create', [AdminEstheticienController::class, 'create'])->name('admin.estheticiens.create');
    Route::post('/estheticiens', [AdminEstheticienController::class, 'store'])->name('admin.estheticiens.store');
    Route::get('/estheticiens/{id}/edit', [AdminEstheticienController::class, 'edit'])->name('admin.estheticiens.edit');
    Route::put('/estheticiens/{id}', [AdminEstheticienController::class, 'update'])->name('admin.estheticiens.update');
    Route::delete('/estheticiens/{id}', [AdminEstheticienController::class, 'destroy'])->name('admin.estheticiens.destroy');


});
// Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
//     Route::get('/estheticiens', [AdminEstheticienController::class, 'index'])->name('admin.estheticiens.index');
//     Route::get('/estheticiens/create', [AdminEstheticienController::class, 'create'])->name('admin.estheticiens.create');
//     Route::post('/estheticiens', [AdminEstheticienController::class, 'store'])->name('admin.estheticiens.store');
//     Route::get('/estheticiens/{id}/edit', [AdminEstheticienController::class, 'edit'])->name('admin.estheticiens.edit');
//     Route::put('/estheticiens/{id}', [AdminEstheticienController::class, 'update'])->name('admin.estheticiens.update');
//     Route::delete('/estheticiens/{id}', [AdminEstheticienController::class, 'destroy'])->name('admin.estheticiens.destroy');
// });
Route::resource('services', ServiceController::class);
Route::resource('promotions', PromotionController::class);