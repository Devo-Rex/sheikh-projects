<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// These routes are for invitations

Route::get('InvitePage', [InviteController::class, 'index'])->name('index');
Route::post('CreateInvite', [InviteController::class, 'createInvite'])->name('createInvite');

// These routes are for submissions

Route::get('SubmissionPage', [SubmissionController::class, 'submissionPage'])->name('submissionPage');
Route::post('CreateSubmission', [SubmissionController::class, 'createSubmission'])->name('createSubmission');

// These routes are for submission answers

Route::get('SubmissionAnswerPage', [SubmissionController::class, 'submissionAnswerPage'])->name('submissionAnswerPage');
Route::post('CreateSubmissionAnswer', [SubmissionController::class, 'createSubmissionAnswer'])->name('createSubmissionAnswer');

// These routes are for category

Route::get('CategoryPage', [CategoryController::class, 'categoryPage'])->name('categoryPage');
Route::post('CreateCategory', [CategoryController::class, 'createCategory'])->name('createCategory');

// These routes are for questions

Route::get('QuestionPage', [QuestionController::class, 'questionPage'])->name('questionPage');
Route::post('CreateQuestion', [QuestionController::class, 'createQuestion'])->name('createQuestion');
