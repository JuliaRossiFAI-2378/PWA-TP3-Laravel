<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'getHome'])->name('home');

//--------------------categorias--------------------

//muestra un post especifico de esa categoria
Route::get('/{category?}/show/{id?}', [CategoryController::class, 'getShow'])->name('show');
//muestra el formulario para crear un post





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/{category?}/edit/{id?}', [CategoryController::class, 'getEditForm'])->name('edit');
    Route::patch('/{category?}/{id?}', [CategoryController::class, 'update'])->name('editPost');
    Route::get('post/create', [CategoryController::class, 'getPostCreate'])->name('post');
    Route::post('post/create', [CategoryController::class, 'createPost'])->name('createPost');
    Route::get('/{category?}/create', [CategoryController::class, 'getCreate'])->name('create');
});


require __DIR__.'/auth.php';

//estos tienen que estar debajo de todo porque sino sobreescriben otras rutas con su parametro
//muestra los posts de esa categoria
Route::get('/{category?}', [CategoryController::class, 'getIndex'])->name('index');
//envia los datos del post y los sube a la DB


Route::get('/{category}/{id}', function ($category, $id) {//redireccion fancy
    return redirect()->route('show', ['category' => $category, 'id' => $id]);
});


