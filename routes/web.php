<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [FormController::class, 'showProfileForm'])->name('show.form');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('Attendance', [FormController::class, 'showEmp_DTRForm'])->name('Emp_DTR');
Route::get('Tasks', [FormController::class,'showTasksForm'])->name('Emp_Tasks');
Route::get('Tickets', [FormController::class, 'showTicketsForm'])->name('Emp_Tickets');
Route::get('Login', [FormController::class, 'showLoginForm'::class])->name('LoginPage');
//add other routes for other
