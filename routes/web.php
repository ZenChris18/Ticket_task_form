<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TaskController;

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


Route::get('/', [FormController::class, 'showProfileForm'])->name('show.form');
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit.form');
Route::get('Attendance', [FormController::class, 'showEmp_DTRForm'])->name('Emp_DTR');
Route::get('Tasks', [FormController::class,'showTasksForm'])->name('Emp_Tasks');
Route::get('Tickets', [FormController::class, 'showTicketsForm'])->name('Emp_Tickets');
Route::get('Login', [FormController::class, 'showLoginForm'::class])->name('LoginPage');
Route::get('Leave', [FormController::class,'showLeaveForm'])->name("Emp_Leave");
Route::get('Hours', [FormController::class,'showHoursForm'])->name('Emp_Hours');
//add other routes for other
