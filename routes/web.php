<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\timeTableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userListController;
use App\Http\Controllers\UserOperation;
use App\Http\Controllers\BookController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\stuProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
Route::get('/', [timeTableController::class, 'index']);
    
});

Route::get('/borrow-req-Books', [BookController::class,'index'])->name('admin.books.index');
Route::get('/unapproved', [BookController::class,'unapproved'])->name('admin.books.unapproved');
Route::get('/approved',[BookController::class,'approved'])->name('admin.books.approved');
Route::post('/approve/{id}', [BookController::class,'approve'])->name('admin.books.approve');
Route::post('/unapprove/{id}',[BookController::class,'unapprove'])->name('admin.books.unapprove');

Route::get('/books-gride',[BookController::class,'displayBook'])->name('books.request');
Route::post('/books-borrow-req',[dashboardController::class,'requestBook'])->name('books.borrow.request');
Route::post('/borrow-req-Books',[dashboardController::class,'borrowBook'])->name('books.borrow.sent');


Route::view('/listed-Books','admin/pages/listedBook');
Route::view('/damaged-Books','admin/pages/damagedBooks');
Route::view('/issued-Books','admin/pages/issuedBooks');
//Route::view('/borrow-req-Books','admin/pages/borrowReq');
Route::view('/addBook','admin/pages/addNewBook');
//Route::view('/books-gride','books-gride-view');

Route::view('/test','admin/test');


Route::view('/staff','staff/StaffProfile');
Route::view('/borrow-Detail','staff/pages/borrowDetail');
Route::view('/extend-Return','staff/pages/extendReturn');
Route::view('/fine-Details','staff/pages/fineDetails');
Route::get('/student',[stuProfileController::class,'showData']);
Route::view('/Stu-borrow-Detail','student/pages/StuborrowDetail');
Route::view('/Stu-extend-Return','student/pages/StuextendReturn');
Route::view('/Stu-fine-Details','student/pages/StufineDetails');

Route::post('/SaveEditedData',[stuProfileController::class,'stuDataSave']);







