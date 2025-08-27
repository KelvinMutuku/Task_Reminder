<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/ping', function  (Request $request) {
    $connection = DB::connection('mongodb');
    try {
      $connection->command(['ping' => 1]);
      $msg = 'MongoDB is accessible!';
    } catch (Exception $e) {
      $msg = 'You are not connected to MongoDB. Error: ' . $e->getMessage();
    }
    return ['msg' => $msg];
  });