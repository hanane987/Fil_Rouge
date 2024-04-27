<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
;
use App\Http\Controllers\PromotionController;

use App\Http\Controllers\EstheticienController;

use App\Http\Controllers\ReservationController;
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

Route::get('/', [HomeController::class,'index'])->name('/');
Route::middleware('guest')->group(function(){
   
    Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
    Route::post('/registered',[RegisterController::class,'register'])->name('registered');
    Route::post('/logined', [LoginController::class,'login'])->name('logined');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

});


Route::middleware('auth')->group(function(){
    Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
});



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
    Route::post('/estheticienss', [AdminEstheticienController::class, 'search'])->name('admin.estheticiens.search');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}/destroy', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::get('/admin/esth/create', [EstheticienController::class, 'create'])->name('admin.esth.create');



    

});


Route::resource('promotions', PromotionController::class);







Route::middleware(['auth', 'role:estheticien'])->group(function () {

    Route::post('/estheticien/profile/store', [EstheticienController::class, 'store'])->name('estheticien.store');
    Route::put('/estheticien/update', [EstheticienController::class, 'update'])->name('estheticien.update');

    // Route for editing the estheticien profile form
    Route::get('/estheticien/edit', [EstheticienController::class, 'edit'])->name('estheticien.edit');
    Route::get('/estheticien', [EstheticienController::class, 'index'])->name('estheticien.index');
    Route::get('/estheticien/create', [EstheticienController::class, 'create'])->name('estheticien.create');

    Route::get('/estheticien/services-and-promotions', [EstheticienController::class, 'servicesAndPromotions'])
    ->name('estheticien.services_and_promotions');
    Route::get('/estheticien_peiu', [EstheticienController::class, 'display'])->name('estheticien_peiu');
    // web.php

Route::get('/singlepage/{service}', [ServiceController::class, 'singlepage'])->name('services.singlepage');
// web.php

Route::post('/estheticien/assign-service', [EstheticienController::class, 'assignService'])->name('estheticien.assign_service');

Route::get('/reservations_confirm', [ReservationController::class, 'confirmReservation'])->name('reservations.confirm');
Route::put('/confirm_reserv/{reservation}', [ReservationController::class, 'confirm_reserv'])->name('confirm_reserv');



// jijj

//  user user 




   

});
Route::middleware(['auth','role:user'])->group(function () {
   
    Route::get('/reservations_create/{service}', [ReservationController::class, 'reserver'])->name('reservations.create');
    Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations.view_more/{service}', [EstheticienController::class, 'viewMore'])->name('reservations.view_more');

    Route::get('/myreservations', [ReservationController::class, 'myreservations'])->name('myreservations');
    Route::delete('/cancel/{booking}', [ReservationController::class, 'cancel'])->name('cancel');

   
});



// Route to show all reservations
 // Make sure to replace YourControllerName with the actual name of your controller
Route::get('/welcome',[EstheticienController::class, 'showEstheticienProfile'])->name('welcome');
Route::get('/service_show/{service}',[ServiceController::class, 'show'])->name('service.show');

Route::get('/profil_esth/{coiffeure}',[EstheticienController::class, 'profil_esth'])->name('profil_esth');




Route::middleware(['auth'])->group(function () {
    Route::get('/user_profile',[EstheticienController::class, 'user_profile'])->name('user_profile');

});