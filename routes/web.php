<?php

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
Route::get('',[\App\Http\Controllers\Front\PageController::class,'index'])->name('front_index');



Route::prefix('management')->group(function (){

    Route::middleware(['auth','manager'])->group(function (){
        //dashboard
        Route::get('dashboard',[\App\Http\Controllers\Management\DashboardController::class,'index'])->name('management_dashboard');

        Route::prefix('projects')->group(function (){
            Route::get('',[\App\Http\Controllers\Management\ProjectController::class,'index'])->name('management_project');
            Route::post('store',[\App\Http\Controllers\Management\ProjectController::class,'store'])->name('management_project_store');
            Route::post('update/{project}',[\App\Http\Controllers\Management\ProjectController::class,'update'])->name('management_project_update');
            Route::get('delete/{project}',[\App\Http\Controllers\Management\ProjectController::class,'delete'])->name('management_project_delete');
            Route::post('update/url/{url}',[\App\Http\Controllers\Management\ProjectController::class,'update_url'])->name('management_project_update_url');
            Route::get('delete/url/{url}',[\App\Http\Controllers\Management\ProjectController::class,'delete_url'])->name('management_project_delete_url');
            Route::get('delete/folder/{folder}',[\App\Http\Controllers\Management\ProjectController::class,'delete_folder'])->name('management_project_delete_folder');
            Route::get('{project}',[\App\Http\Controllers\Management\ProjectController::class,'show'])->name('management_project_show');
            Route::post('{project}/add/folder',[\App\Http\Controllers\Management\ProjectController::class,'add_folder'])->name('management_project_add_folder');
            Route::post('{project}/add/url',[\App\Http\Controllers\Management\ProjectController::class,'add_url'])->name('management_project_add_url');
        });


    });
});
Route::prefix('panel')->group(function (){
    Route::get('auth',[\App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('panel_auth_login');
    Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
    Route::post('auth',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('panel_auth_login');
    Route::post('register',[\App\Http\Controllers\Auth\RegisterController::class,'register'])->name('panel_auth_register');
    Route::middleware(['auth'])->group(function (){
        Route::get('',[\App\Http\Controllers\Panel\DashboardController::class,'index'])->name('panel_dashboard');
        Route::prefix('projects')->group(function (){
            Route::get('',[\App\Http\Controllers\Panel\ProjectController::class,'index'])->name('panel_project');
            Route::post('store',[\App\Http\Controllers\Panel\ProjectController::class,'store'])->name('panel_project_store');
            Route::post('update/{project}',[\App\Http\Controllers\Panel\ProjectController::class,'update'])->name('panel_project_update');
            Route::get('delete/{project}',[\App\Http\Controllers\Panel\ProjectController::class,'delete'])->name('panel_project_delete');
            Route::post('update/url/{url}',[\App\Http\Controllers\Panel\ProjectController::class,'update_url'])->name('panel_project_update_url');
            Route::get('delete/url/{url}',[\App\Http\Controllers\Panel\ProjectController::class,'delete_url'])->name('panel_project_delete_url');
            Route::get('delete/folder/{folder}',[\App\Http\Controllers\Panel\ProjectController::class,'delete_folder'])->name('panel_project_delete_folder');
            Route::get('{project}',[\App\Http\Controllers\Panel\ProjectController::class,'show'])->name('panel_project_show');
            Route::post('{project}/add/folder',[\App\Http\Controllers\Panel\ProjectController::class,'add_folder'])->name('panel_project_add_folder');
            Route::post('{project}/add/url',[\App\Http\Controllers\Panel\ProjectController::class,'add_url'])->name('panel_project_add_url');
        });
        Route::prefix('store')->group(function (){
            Route::get('',[\App\Http\Controllers\Panel\StoreController::class,'index'])->name('panel_store');
            Route::get('show/{slug}',[\App\Http\Controllers\Panel\StoreController::class,'show'])->name('panel_store_show');
        });
    });

});
