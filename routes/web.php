<?php
use App\Models\Note;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotaController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function() {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('resetPassword', 'resetpassword')->name('resetPassword');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});


Route::middleware('auth')->group(function () {
    Route::get('dashboard',[NotaController::class,'index'])->name('dashboard');
    Route::post('nota/save', [NotaController::class, 'guardarNota'])->name('notaSave');



    Route::get('clientes', function () {
        return view('clientes');
    })->name('clientes');

});




