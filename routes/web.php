<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;


// index
Route::get('/', [BookmarkController::class, 'index']);
Route::get('/bookmarks', [BookmarkController::class, 'index']);

// create
Route::get('/bookmarks/create', [BookmarkController::class, 'create']);

// store
Route::post('/bookmarks', [BookmarkController::class, 'store']);

// show
Route::get('/bookmarks/{type}', [BookmarkController::class, 'show']);

// edit
Route::get('/bookmarks/edit/{bookmark}', [BookmarkController::class, 'edit']);

// update
Route::patch('/bookmarks/{id}', [BookmarkController::class, 'update']);

// destroy
Route::delete('/bookmarks/{bookmark}', [BookmarkController::class, 'destroy']);

Route::delete('/types/{type}', [TypeController::class, 'destroy']);
