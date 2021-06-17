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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('setlists', [\App\Http\Controllers\SetlistController::class, 'index'])->name('setlists');    
    Route::get('setlists/{id}/sort', [\App\Http\Controllers\SetlistController::class, 'sort']) ->name('setlist.sort');
    Route::get('setlists/{id}', [\App\Http\Controllers\SetlistController::class, 'show']) ->name('setlist.show');
    Route::get('reports/{id}', [\App\Http\Controllers\SetlistController::class, 'report']) ->name('setlists.report');
    Route::get('setlists/{id}', [\App\Http\Controllers\SetlistController::class, 'setlist']) ->name('setlists.setlist');

    Route::get('/editsetlist/{id}', [\App\Http\Controllers\PageController::class, 'editsonglist'])->name('editsetlist');
    Route::get('/createsetlist', [\App\Http\Controllers\PageController::class, 'createsonglist'])->name('createsetlist');
    //Route::get('/setlists/{id}', ShowSetlists::class);

    // Songs
    Route::get('/', [\App\Http\Controllers\SongController::class, 'index'])->name('songs');
    
    

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class)
            ->only(['edit', 'update']);
        Route::resource('checklist_groups', \App\Http\Controllers\Admin\ChecklistGroupController::class);
        Route::resource('checklist_groups.checklists', \App\Http\Controllers\Admin\ChecklistController::class);
        Route::resource('checklists.tasks', \App\Http\Controllers\Admin\TaskController::class);
        Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
    });
});
