<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComedorController;

Route::get('/comedor', [ComedorController::class, 'index'])->name('comedor.index');
Route::get('/comedor/registro', [ComedorController::class, 'registro'])->name('comedor.registro');
Route::get('/comedor/menu', [ComedorController::class, 'menu'])->name('comedor.menu');
Route::get('/comedor/alergias', [ComedorController::class, 'alergias'])->name('comedor.alergias');
Route::get('/comedor/proveedores', [ComedorController::class, 'proveedores'])->name('comedor.proveedores');
Route::get('/comedor/documentos', [ComedorController::class, 'documentos'])->name('comedor.documentos');
Route::get('/comedor/contactanos', [ComedorController::class, 'contactanos'])->name('comedor.contactanos');
