<?php

use App\Http\Controllers\PreRegistrationController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PreRegistrationController::class, 'index'])->name('Index');
Route::get('/Contactanos', [PreRegistrationController::class, 'Contactanos'])->name('Contactanos');
Route::get('/SobreNosotros', [PreRegistrationController::class, 'SobreNosotros'])->name('SobreNosotros');
Route::get('/FAQ', [PreRegistrationController::class, 'FAQ'])->name('FAQ');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
