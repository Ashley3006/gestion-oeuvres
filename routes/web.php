<?php

use App\Http\Controllers\Admin\oeuvreControllerController as AdminoeuvreController;
use App\Http\Controllers\Admin\categorieControllerController as AdmincategorieController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/oeuvre/ajouter', [AdminOeuvreController::class, 'ajouter'])->name('admin.oeuvre.ajouter');

Route::post('/admin/oeuvre/ajouter/traitement', [AdminoeuvreController::class, 'ajouter_traitement'])->name('admin.oeuvres.ajouter.traitement');

Route::get('/admin/oeuvre/{id}/modifier', [AdminoeuvreController::class, 'modifier'])->name('admin.oeuvre.modifier');

Route::post('/admin/oeuvre/modifier/{id}/traitement', [AdminoeuvreController::class, 'modifier_traitement'])->name('admin.oeuvres.modifier_traitement');

Route::get('/admin/oeuvre/liste', [AdminoeuvreController::class, 'liste'])->name('admin.oeuvres.liste');

Route::post('/admin/oeuvre/{id}/supprimer', [AdminoeuvreController::class, 'supprimer'])->name('admin.oeuvre.supprimer');

Route::get('/admin/oeuvre/detail', [AdminoeuvreController::class, 'detail'])->name('admin.oeuvre.detail');


