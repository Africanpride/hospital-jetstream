<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Models\User;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Route;

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

// Hide register after Admin account is created
if (User::count() > 1) {

    Route::get('register', function () {
        return view('auth.login');
    })->name('register');
} else {
    Route::get('register', function () {
        return view('auth.register');
    })->name('register');
}


Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/settings', function () {
        return view('admin.settings');
    });
    Route::get('/profile', function () {
        return view('profile.show');
    });
    Route::get('/test', function () {
        $users = User::all();
        return view('test', compact('users'));
    });
    Route::get('/test2', function () {

        return view('test2');
    });
    Route::get('/staff', function () {
        $users = User::all();
        return view('staff', compact('users'));
    });

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});
