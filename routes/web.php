<?php

use App\Http\Controllers\Admin\DashbaordController;
use App\Http\Controllers\Admin\FacultyManagement;
use App\Http\Controllers\Admin\StudentManagementController;
use App\Http\Controllers\Admin\FeeManagement;
use App\Http\Controllers\Admin\LibraryManagementContoller;
use App\Http\Controllers\Admin\SchoolManagement;
use App\Http\Controllers\Student\Dashboard;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('web.home');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->prefix('admin/')->name('admin.')->group( function() {

    Route::get('dashboard', [DashbaordController::class, 'index'])->name('dashboard');

    Route::get('students-management', [StudentManagementController::class, 'index'])->name('students');
    Route::get('student-management/add', [StudentManagementController::class, 'addStudent'])->name('student.add');
    Route::post('student-management/store', [StudentManagementController::class, 'storeStudent'])->name('student.store');
    Route::get('student-management/{student}/display/{registration}', [StudentManagementController::class, 'getStudent'])->name('student.get');


    Route::get('fee-management', [FeeManagement::class, 'index'])->name('fee');

    Route::get('library-management', [LibraryManagementContoller::class, 'index'])->name('library');

    Route::get('school-management', [SchoolManagement::class, 'index'])->name('school');

    Route::get('faculty-management', [FacultyManagement::class, 'index'])->name('faculty');
    Route::post('faculty-management/add', [FacultyManagement::class, 'add'])->name('faculty.add');

});

Route::middleware(['auth', 'student'])->prefix('student/')->name('student.')->group( function() {
    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
});
