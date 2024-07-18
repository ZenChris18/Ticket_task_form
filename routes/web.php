<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showProfileForm'])->name('show.form');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('Attendance', [FormController::class, 'showEmp_DTRForm'])->name('Emp_DTR');