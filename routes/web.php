<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\LogoutController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\MessageController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\OrganizationController;
use \App\Http\Controllers\ReportController;
use \App\Http\Controllers\Auth\ForgotPasswordController;
use \App\Http\Controllers\Auth\ResetPasswordController;



//Login Page
Route::get('/', [LoginController::class, 'index'])
    ->name('login');
Route::post('/', [LoginController::class, 'store']);

//Dashboard when user is login
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

//Logout
Route::post('/logout', [LogoutController::class, 'logout'])
    ->name('logout');

//User profile, edit, and delete
Route::get('/profile', [ProfileController::class, 'show'])
    ->name('profile.show');

Route::post('/profile/{user}', [ProfileController::class, 'update'])
    ->name('updateProfile');

Route::delete('/profile/{user}', [ 'delete'])
    ->name('post.delete');

Route::get('/add/user', [UserController::class, 'index'])
    ->name('addUser');
Route::post('/add/user', [UserController::class, 'create']);

Route::get('/add/student', [StudentController::class, 'create'])
    ->name('addStudent');
Route::post('/add/student', [StudentController::class, 'store']);
Route::post('/add/file/student', [StudentController::class, 'storeMultiple'])
    ->name('fileRegister');
Route::patch('/assign/all', [StudentController::class, 'assignAll'])
    ->name('assignAll');
Route::get('/upload/acceptance', [StudentController::class, 'showAcceptance'])
    ->name('showAcceptance');
Route::post('/upload/acceptance', [StudentController::class, 'uploadAcceptance'])
    ->name('uploadAcceptance');
Route::get('/verify/acceptance', [StudentController::class, 'newAcceptance'])
    ->name('newAcceptance');
Route::post('/verify/acceptance/{acceptance}', [StudentController::class, 'verifyAcceptance'])
    ->name('verifyAcceptance');
Route::delete('/delete/acceptance/{acceptance}', [StudentController::class, 'declineAcceptance'])
    ->name('declineAcceptance');

Route::get('/list/student', [StudentController::class, 'index'])
    ->name('listStudent');
Route::get('/unassigned/student', [StudentController::class, 'unassigned'])
    ->name('unassignedStudent');
Route::delete('/delete/student', [StudentController::class, 'destroy'])
    ->name('deleteStudent');


Route::get('/add/lecturer', [UserController::class, 'showLecturer'])
    ->name('addLecturer');
Route::post('/add/lecturer', [UserController::class, 'addLecturer']);


Route::get('/list/admin', [UserController::class, 'showAdmin'])
    ->name('adminList');
//Route::post('/add/lecturer', [UserController::class, 'addLecturer']);

Route::get('/list/lecturer', [UserController::class, 'listLecturer'])
    ->name('adminLecturer');

// Organization
Route::get('/organization/list', [OrganizationController::class, 'index'])
    ->name('org-list');
Route::get('/add/organization', [OrganizationController::class, 'create'])
    ->name('addOrganization');
Route::post('/add/organization', [OrganizationController::class, 'store']);

Route::get('/organization/placement', [OrganizationController::class, 'application'])
    ->name('application');
Route::post('/organization/placement', [OrganizationController::class, 'apply']);

Route::get('/placement', [OrganizationController::class, 'placement'])
    ->name('placement');
Route::get('/organization/false', [OrganizationController::class, 'organizationsFalse'])
    ->name('organizationsFalse');
//verify organization to true
Route::post('/verify/organization/{organization}', [OrganizationController::class, 'verifyOrganization'])
    ->name('verifyOrganization');
Route::delete('/delete/organization/{organization}', [OrganizationController::class, 'destroy'])
    ->name('deleteOrganization');

//Report
Route::get('/report', [ReportController::class, 'create'])
    ->name('report');
Route::post('/report', [ReportController::class, 'store']);

Route::get('/students/reports', [ReportController::class, 'studentsReports'])
    ->name('studentsReports');
Route::patch('/view/report/{report}', [ReportController::class, 'view'])
    ->name('viewReport');
Route::patch('/report/{report}', [ReportController::class, 'update'])
    ->name('editReport');
//lecturer get all reports from a specific student
Route::get('/student/{student}/reports', [ReportController::class, 'show'])
    ->name('reports.show');

//Message
Route::get('/message', [MessageController::class, 'create'])
    ->name('message');
Route::post('/message', [MessageController::class, 'store']);

//form to display request password reset link
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])
    ->middleware('guest')
    ->name('password.request');
//Sending request to reset password
Route::post('/forgot-password', [ForgotPasswordController::class, 'resetLink'])
    ->middleware('guest')
    ->name('password.email');

//password reset
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'index'])
    ->middleware('guest')
    ->name('password.reset');

//reset-password
Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

//Display image to user
Route::get('/{filename}', [ReportController::class , 'displayImage'])
    ->name('displayImage');


