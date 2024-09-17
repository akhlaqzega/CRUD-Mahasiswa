<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

route::get("/", [ProductController::class, 'index'])->name('product.product');
route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product.show');
route::get('/product/edit{id}', [ProductController::class, 'edit'])->name('product.edit');
route::put('/product/update{id}', [ProductController::class, 'update'])->name('product.update');
route::delete('/produk/delete{id}', [ProductController::class, 'destroy'])->name('index.destroy');