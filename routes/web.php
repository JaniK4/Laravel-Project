<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('/menu', [UserController::class, 'showMenu'])->name('menu');

Route::get('contact', function () {
    return view('contact');
});
Route::post('/contact', [UserController::class, 'submitContactForm'])->name('contact.submit');

Route::view('/dashboard', 'dashboard')->name('dashboard');

// Route::get('/dashboard', [UserController::class, 'showDash'])->name('dashboard');





// Route to display the login form (GET request)
Route::get('/login', function () {
    return view('login');  // Make sure you have a 'login.blade.php' view
})->name('login.form');
// Route to handle the login form submission (POST request)
Route::post('/login', [UserController::class, 'login'])->name('login');



// Route to show the add menu form
Route::get('/addmenu', [UserController::class, 'showAddMenu'])->name('addmenu.show');
// Route to handle form submission
Route::post('/addmenu', [UserController::class, 'addmenu'])->name('addmenu');


Route::get('/view-menu', [UserController::class, 'viewMenu'])->name('view-menu');
Route::get('/edit/{id}', [UserController::class, 'showEdit'])->name('edit.show');
// Route to handle form submission
Route::post('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');





