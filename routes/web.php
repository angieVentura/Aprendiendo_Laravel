<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;

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
    //Forma re pro de agrupar rutas, agrupa 7 returas: create, edit, update, index, show, destroy, store
    Route::resource('products', ProductController::class);
});


//Route::post('products', [ProductController::class, 'create']);

// Route::controller(Product::class)->group(function(){
//     Route::post('products', 'create');
// });




require __DIR__.'/auth.php';
