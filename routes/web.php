<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\EstheticianController;
use App\Http\Controllers\EstheticienController;
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
   
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/logined', [LoginController::class,'login'])->name('logined');
});


Route::middleware('auth')->group(function(){
    Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
});
// Route::get('/estheticien/index', [RegisterController::class, 'index'])->name('estheticien.index');
Route::get('estheticien.index', function () {
    return view('esth.index');
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
    Route::get('/admin/estheticiens/create', [AdminEstheticienController::class, 'create'])->name('admin.estheticiens.create');
    Route::put('/admin/estheticiens/{id}', [AdminEstheticienController::class, 'update'])->name('admin.estheticiens.update');
    Route::get('/admin/estheticiens', [AdminEstheticienController::class, 'index'])->name('admin.estheticiens.index');
    Route::get('/admin/statistics', [AdminStatisticsController::class, 'statistics'])->name('admin.promotions.statistics');



    

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');


Route::get('/admin/esth/create', [EstheticienController::class, 'create'])->name('admin.esth.create');


// Route::get('/estheticien', [EstheticienController::class, 'index'])->name('estheticien.index');
// Route::get('/estheticien/create', [EstheticienController::class, 'create'])->name('estheticien.create');
// Route::post('/estheticien', [EstheticienController::class, 'store'])->name('estheticien.store');
// Route::get('/estheticien/{estheticien}', [EstheticienController::class, 'show'])->name('estheticien.show');
// Route::get('/estheticien/{estheticien}/edit', [EstheticienController::class, 'edit'])->name('estheticien.edit');
// Route::put('/estheticien/{estheticien}', [EstheticienController::class, 'update'])->name('estheticien.update');
// Route::delete('/estheticien/{estheticien}', [EstheticienController::class, 'destroy'])->name('estheticien.destroy');
    

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


Route::resource('admin.esth.estheticiens', EstheticienController::class);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');