<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\TypeController;

use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

Route::get('/', function () {
    return 'thats weird';
});

Route::middleware('auth')->group(function () {
    Route::get('/bookmarks', [BookmarkController::class, 'index']);

    Route::get('/bookmarks/create', [BookmarkController::class, 'create']);

    Route::post('/bookmarks', [BookmarkController::class, 'store']);

    Route::get('/bookmarks/{type}', [BookmarkController::class, 'show']);

    Route::get('/bookmarks/edit/{bookmark}', [BookmarkController::class, 'edit']);
    Route::patch('/bookmarks/{id}', [BookmarkController::class, 'update']);

    Route::delete('/bookmarks/{bookmark}', [BookmarkController::class, 'destroy']);
    Route::delete('/types/{type}', [TypeController::class, 'destroy']);

    Route::delete('/logout', [SessionController::class, 'destroy']);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserRegisterController::class, 'register']);
    Route::post('/register', [UserRegisterController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/admin', function () {
    Gate::authorize('view-admin');
    $users = User::all();
    return view('admin.index', ['users' => $users]);
});
