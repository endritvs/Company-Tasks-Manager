<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ViewErrorBag;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;
use App\Models\Company;
use App\Models\Task;

Route::get('/', function () {
    return view('auth/login');
});


// Route::get('/admin/company/edit-company/1', function () {
//     return view('index1');
// });
Route::get('/index1', [CompanyController::class, 'index']);
Route::get('/teams', [UserController::class, 'teams']);


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});


Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/user-edit', function () {
    return view('user-edit');
});

Route::get('/user-delete', function () {
    return view('user-delete');
});
Route::get('/edit-company', function () {
    return view('edit-company');
});

Route::get('/projects', function () {
    return view('projects');
});
Route::get('/teams', function () {
    return view('teams');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {

    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, 'teams'])->name('users.index');
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/update-user/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('/create-user', [UserController::class, 'create_view'])->name('users.create');
        Route::post('/create-user', [UserController::class, 'create'])->name('adm.users.create');
        Route::get('/create-project', [ProjectController::class, 'create_view'])->name('admin.project.create');
        Route::post('/create-project', [ProjectController::class, 'create'])->name('adm.project.create');
        Route::get('/create-project', [UserController::class, 'index'])->name('project.users.index');
        Route::get('/completed-projects', [ProjectController::class, 'complete'])->name('project.completed');
        Route::get('/edit-project', [UserController::class, 'index'])->name('projects.index');
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('adm.project.edit');
        Route::post('/update/{id}', [ProjectController::class, 'update'])->name('adm.project.update');
        Route::get('/destroy-project/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    });
});
Route::prefix('admin')->group(function () {
    Route::prefix('task')->group(function () {
        Route::get('/active-task', [TasksController::class, 'index'])->name('task.index');
        Route::get('/completed-task', [TasksController::class, 'index1'])->name('task.completed');
        Route::get('/create-task', [TasksController::class, 'create_view'])->name('route.create.task');
        Route::post('/create-task', [TasksController::class, 'create'])->name('task.create');
        Route::get('/destroy-task/{id}', [TasksController::class, 'destroy'])->name('task.destroy');
        Route::get('/edit-tasks/{id}', [TasksController::class, 'edit_task'])->name('task.edit');
        Route::post('/update-tasks/{id}', [TasksController::class, 'update'])->name('task.update');
        Route::get('/my-tasks/{id}', [TasksController::class, 'my_tasks'])->name('my.tasks');
        Route::get('/completed-tasks-worker/{id}', [TasksController::class, 'completed_my_tasks'])->name('my.completed.tasks');
    });
});


Route::prefix('admin')->group(function () {
    Route::prefix('company')->group(function () {
        Route::get('/edit-company/{id}', [CompanyController::class, 'edit'])->name('company.edit');
        Route::post('/update/{id}', [CompanyController::class, 'update'])->name('company.update');
        Route::get('/include/navbar/{id}', [CompanyController::class, 'index'])->name('company.users.index');
    });
});


Route::prefix('/users')->group(function () {
    Route::get('/settings-edit/{id}', [UserController::class, 'settings_edit'])->name('settings.edit');
    Route::post('/settings-update/{id}', [UserController::class, 'settings_update'])->name('settings.update');
    Route::post('/settings-email/{id}', [UserController::class, 'settings_email'])->name('settings.email');
    Route::post('/settings-password/', [UserController::class, 'settings_password'])->name('settings.password');
    Route::get('/settings-account/{id}', [UserController::class, 'delete_account'])->name('settings.accountD');
    Route::get('/profile/{id}', [UserController::class, 'profile_edit'])->name('profile.edit');
});