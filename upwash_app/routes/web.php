<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientsController;
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




Route::get('clear', function () {
    Log::debug('CLEARED');
   Artisan::call('cache:clear');
   Artisan::call('view:clear');
    dd('Cleared!');
});

Route::get('/migrate', function(){
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/', [MainController::class,'index'])->name('/');
Route::get('/register', function () {  return view('register'); })->name('register');
Route::get('/login', function () {  return view('login'); })->name('login');
Route::get('/rules', function () {  return view('rules'); })->name('rules');
Route::get('/thanks', [ClientsController::class, 'thanks'])->name('thanks');
Route::get('/thanks/{id}', function (int $id) {  return view('thanks',['id'=>$id]); })->name('thanks');
Route::post('/stripe-init', [ClientsController::class, 'stripe'])->name('stripe');
Route::get('/profile', [UserController::class,'profile'])->name('profile')->middleware('isAuth');
Route::get('/last', [UserController::class,'last'])->name('last')->middleware('isAuth');
Route::get('/settings', [UserController::class,'settings'])->name('settings')->middleware('isAuth');
Route::get('/addTicket', [MainController::class,'addTickets'])->name('addTicket')->middleWare('isAuth');
Route::get('/exit', function() { Session::forget('auth'); return redirect()->route('/'); })->name('exit')->middleware('isAuth');
Route::get('/kiitos', function () {  return view('kiitos'); })->name('kiitos');


Route::get('/takeOrder/{id}', [UserController::class,'takeOrder'])->name('takeOrder')->middleware('isAuth');
Route::get('/closeOrder/{id}', [UserController::class,'closeOrder'])->name('closeOrder')->middleware('isAuth');

Route::get('/admin', [AdminController::class,'admin'])->name('admin')->middleware('isAuth')->middleware('isAdmin');
Route::post('/addUser', [AdminController::class,'addUser'])->name('addUser')->middleware('isAuth')->middleware('isAdmin');
Route::get('/prices', [AdminController::class,'prices'])->name('prices')->middleware('isAuth')->middleware('isAdmin');
Route::get('/orders', [AdminController::class,'orders'])->name('orders')->middleware('isAuth')->middleware('isAdmin');
Route::get('/users', [AdminController::class,'users'])->name('users')->middleware('isAuth')->middleware('isAdmin');
Route::get('/tickets', [AdminController::class,'tickets'])->name('tickets')->middleware('isAuth')->middleware('isAdmin');
Route::get('/order/{id}', [AdminController::class,'order'])->name('order')->middleware('isAuth')->middleware('isAdmin');
Route::get('/ticket/{id}', [AdminController::class,'ticket'])->name('ticket')->middleware('isAuth')->middleware('isAdmin');
Route::get('/user/{id}', [AdminController::class,'user'])->name('user')->middleware('isAuth')->middleware('isAdmin');
Route::get('/deleteOrder/{id}', [AdminController::class,'deleteOrder'])->name('deleteOrder')->middleware('isAuth')->middleware('isAdmin');
Route::get('/deleteTicket/{id}', [AdminController::class,'deleteTicket'])->name('deleteTicket')->middleware('isAuth')->middleware('isAdmin');
Route::get('/deleteUser/{id}', [AdminController::class,'deleteUser'])->name('deleteUser')->middleware('isAuth')->middleware('isAdmin');
Route::get('/deleteCupon/{id}', [AdminController::class,'deleteCupon'])->name('deleteCupon')->middleware('isAuth')->middleware('isAdmin');

// ZIP code routes

Route::get('/zip-codes', [AdminController::class, 'indexOfZipCodes'])->name('zip-codes')->middleware('isAuth')->middleware('isAdmin');
Route::post('zip-codes', [AdminController::class, 'storeZipCode'])->name('zip-codes-store')->middleware('isAuth')->middleware('isAdmin');
Route::get('/zip-codes/{id}', [AdminController::class, 'showZipCode'])->name('zip-codes-show')->middleware('isAuth')->middleware('isAdmin');
Route::put('/zip-codes/{id}', [AdminController::class, 'updateZipCode'])->name('zip-codes-update')->middleware('isAuth')->middleware('isAdmin');
Route::delete('/zip-codes/{id}', [AdminController::class, 'destroyZipCode'])->name('zip-codes-destroy')->middleware('isAuth')->middleware('isAdmin');

Route::post('add-session', [MainController::class, 'addSession'])->name('add-session');

Route::get('/profile/order/{id}', [UserController::class,'order'])->name('Porder')->middleware('isAuth');

Route::post('/addClient', [ClientsController::class,'addClient'])->name('addClient');
Route::post('/sendMail', [ClientsController::class,'sendMail'])->name('sendMail');
Route::post('/registerF', [UserController::class,'register'])->name('regF');
Route::post('/loginF', [UserController::class,'login'])->name('loginF');
Route::post('/changeAuto', [UserController::class,'changeAuto'])->name('changeAuto');
Route::post('/changeAdress', [UserController::class,'changeAdress'])->name('changeAdress');
Route::post('/setSettings', [UserController::class,'setSettings'])->name('setSettings')->middleware('isAuth');
Route::post('/setPrice', [AdminController::class,'setPrice'])->name('setPrice')->middleware('isAuth')->middleware('isAdmin');
Route::post('/ticketF', [MainController::class,'sendTicket'])->name('ticketF');

Route::post('/setMail', [AdminController::class,'setMail'])->name('setMail')->middleware('isAuth')->middleware('isAdmin');
Route::post('/makeCupon', [AdminController::class,'makeCupon'])->name('makeCupon')->middleware('isAuth')->middleware('isAdmin');
