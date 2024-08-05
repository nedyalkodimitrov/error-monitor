<?php

use Illuminate\Support\Facades\Route;

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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("auth");
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home')->middleware("auth");

Route::group(["prefix" => "admin",
    "as" => "admin.",
    "middleware" => "auth"], function () {

    Route::group([
        "as" => "technology.",
    ], function () {
        Route::get('/technologies', [App\Http\Controllers\Admin\TechnologyController::class, 'showTechnologies'])->name('showAll');
        Route::get('/technologies/{id}', [App\Http\Controllers\Admin\TechnologyController::class, 'showTechnology'])->name('showOne');
        Route::get('/technology', [App\Http\Controllers\Admin\TechnologyController::class, 'showTechnologyForm'])->name('showForm');
        Route::post('/technology', [App\Http\Controllers\Admin\TechnologyController::class, 'createTechnology'])->name('create');
        Route::patch('/technologies/{id}', [App\Http\Controllers\Admin\TechnologyController::class, 'editTechnology'])->name('edit');
        Route::delete('/technologies/{id}', [App\Http\Controllers\Admin\TechnologyController::class, 'deleteTechnology'])->name('delete');

        Route::group([
            "as" => "version.",
            "prefix" => "technologies/{id}"
        ], function () {
            Route::get('/version', [App\Http\Controllers\Admin\TechnologyController::class, 'showTechnologyVersionForm'])->name('showForm');
            Route::post('/version', [App\Http\Controllers\Admin\TechnologyController::class, 'createTechnologyVersion'])->name('create');
            Route::patch('/version/{versionId}', [App\Http\Controllers\Admin\TechnologyController::class, 'editTechnologyVersion'])->name('edit');
            Route::delete('/version/{versionId}', [App\Http\Controllers\Admin\TechnologyController::class, 'deleteTechnologyVersion'])->name('delete');
        });
    });


    Route::group([
        "as" => "app.",
    ], function () {
        Route::get('/apps', [App\Http\Controllers\Admin\AppController::class, 'showApps'])->name('showAll');
        Route::get('/apps/{appId}', [App\Http\Controllers\Admin\AppController::class, 'showApp'])->name('showOne');
        Route::get('/app', [App\Http\Controllers\Admin\AppController::class, 'showAppForm'])->name('showForm');
        Route::post('/app', [App\Http\Controllers\Admin\AppController::class, 'createApp'])->name('create');
        Route::patch('/apps/{appId}', [App\Http\Controllers\Admin\AppController::class, 'editApp'])->name('edit');
        Route::delete('/apps/{appId}', [App\Http\Controllers\Admin\AppController::class, 'deleteApp'])->name('delete');

        Route::group([
            "as" => "version.",
            "prefix" => "apps/{appId}"
        ], function () {
            Route::get('/versions/{versionId}', [App\Http\Controllers\Admin\AppController::class, 'showAppVersion'])->name('showOne');
            Route::post('/version', [App\Http\Controllers\Admin\AppController::class, 'createAppVersion'])->name('create');
            Route::put('/version/{versionId}', [App\Http\Controllers\Admin\AppController::class, 'editAppVersion'])->name('edit');
            Route::delete('/version/{versionId}', [App\Http\Controllers\Admin\AppController::class, 'deleteAppVersion'])->name('delete');
        });

        Route::group([
            "as" => "error.",
            "prefix" => "apps/{id}/version/{versionId}"
        ], function () {
            Route::get('/error/{errorId}', [App\Http\Controllers\Admin\ErrorController::class, 'showError'])->name('show');
            Route::post('/error', [App\Http\Controllers\Admin\ErrorController::class, 'createAppVersion'])->name('create');
            Route::patch('/error/{errorId}', [App\Http\Controllers\Admin\ErrorController::class, 'editAppVersion'])->name('edit');
            Route::delete('/error/{errorId}', [App\Http\Controllers\Admin\ErrorController::class, 'deleteAppVersion'])->name('delete');
        });
    });


    Route::group([
        "as" => "user.",
    ], function () {
        Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'showUsers'])->name('showAll');
        Route::get('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'showUser'])->name('showOne');
        Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'showUserForm'])->name('showForm');
        Route::post('/user', [App\Http\Controllers\Admin\UserController::class, 'createUser'])->name('create');
        Route::patch('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'editUser'])->name('edit');
        Route::delete('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'deleteUser'])->name('delete');
    });

    Route::group([
        "as" => "role.",
    ], function () {
        Route::get('/roles', [App\Http\Controllers\Admin\RoleController::class, 'showRoles'])->name('showAll');
        Route::get('/roles/{id}', [App\Http\Controllers\Admin\RoleController::class, 'showRole'])->name('showOne');
        Route::get('/role', [App\Http\Controllers\Admin\RoleController::class, 'showRoleForm'])->name('showForm');
        Route::post('/role', [App\Http\Controllers\Admin\RoleController::class, 'createRole'])->name('create');
        Route::patch('/roles/{id}', [App\Http\Controllers\Admin\RoleController::class, 'editRole'])->name('edit');
        Route::delete('/roles/{id}', [App\Http\Controllers\Admin\RoleController::class, 'deleteRole'])->name('delete');
    });

    Route::group([
        "as" => "permission.",
    ], function () {
        Route::get('/permissions', [App\Http\Controllers\Admin\PermissionController::class, 'showPermissions'])->name('showAll');
        Route::get('/permissions/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'showPermission'])->name('showOne');
        Route::get('/permission', [App\Http\Controllers\Admin\PermissionController::class, 'showPermissionForm'])->name('showForm');
        Route::post('/permission', [App\Http\Controllers\Admin\PermissionController::class, 'createPermission'])->name('create');
        Route::patch('/permissions/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'editPermission'])->name('edit');
        Route::delete('/permissions/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'deletePermission'])->name('delete');
    });
});




