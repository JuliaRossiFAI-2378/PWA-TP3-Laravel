<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'getIndex']);

//--------------------categorias--------------------
//muestra los posts de esa categoria
Route::get('category/{category?}', [CategoryController::class, 'getIndex'])->name('category');
//muestra un post especifico de esa categoria
Route::get('category/{category}/show/{id}', [CategoryController::class, 'getPost']);
//muestra el formulario para crear un post
Route::get('post/create', [CategoryController::class, 'getPostCreate']);
//envia los datos del post y los sube a la DB
Route::post('post/create', [CategoryController::class, 'createPost'])->name('createPost');
Route::get('category/{category}/create', [CategoryController::class, 'getCreate']);
//envia los datos del post y los sube a la DB
Route::post('category/{category?}', [CategoryController::class, 'createPost'])->name('createPost');
