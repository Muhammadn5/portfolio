<?php

use App\Http\Controllers\crudController;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\backendcontroller;
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

//front
Route::get('/', [frontendcontroller::class, 'index']);
Route::get('/pro', function (){
    return view('frontend.portfolio-details');
});

//admin
Route::get('/admin', [backendcontroller::class, 'index']);

//bio
Route::get('/addbio', [backendcontroller::class, 'addBio']);
Route::post('/add-bio', [crudController::class, 'insertData']);
Route::get('/seebio', [backendcontroller::class, 'seeBio']);
Route::get('editbio', [backendcontroller::class, 'editBio']);
Route::post('update-bio', [crudController::class, 'updateData']);

//skills
Route::get('skills', [backendcontroller::class, 'skills']);
Route::post('add-skill', [crudController::class, 'insertData']);
Route::get('/editskill/{id}', [backendcontroller::class, 'editSkill']);
Route::post('updateskill', [crudController::class, 'updateData']);
Route::post('delete', [crudController::class, 'deleteSingleData']);

//resume
Route::get('/resume', [backendcontroller::class, 'resume']);
Route::post('add-to-resume', [crudController::class, 'insertData']);
Route::get('/editresume/{id}', [backendcontroller::class,'editResume']);
Route::post('update-resume', [crudController::class, 'updateData']);

//services
Route::get('/add-service', [backendcontroller::class, 'addService']);
Route::post('addservice', [crudController::class, 'insertData']);
Route::get('/all-services', [backendcontroller::class, 'allServices']);
Route::get('/edit-service/{id}', [backendcontroller::class, 'editService']);
Route::get('/service-detail/{id}', [frontendController::class, 'serviceDetail']);
Route::post('update-service', [crudController::class, 'updateData']);

//projects
Route::get('/projects', [backendcontroller::class, 'projects']);
Route::post('add-project', [crudController::class, 'insertData']);
Route::get('/editproject/{id}', [backendcontroller::class, 'editProject']);
Route::post('update-project', [crudController::class, 'updateData']);

//Intrests
Route::get('/intrests', [backendcontroller::class, 'intrests']);
Route::post('add-intrest', [crudController::class, 'insertData']);
Route::get('editintrest/{id}', [backendcontroller::class, 'editIntrest']);
Route::post('update-intrest', [crudController::class, 'updateData']);

//messages
Route::get('/messages', [backendcontroller::class, 'messages']);
Route::post('approve-un-approve-message', [crudController::class, 'approveUn_approveMessage']);

//mail
Route::post('contact-submit', [crudController::class, 'insertData']);


//auth
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [\App\Http\Controllers\HomeController::class, 'logOut']);
