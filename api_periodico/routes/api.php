<?php

use App\Http\Controllers\WriterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsLabelController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CategoryController;

Route::get('writers', [WriterController::class, 'index']);
Route::post('writers', [WriterController::class, 'store']);
Route::get('writers/{id}', [WriterController::class, 'show']);
Route::put('writers/{id}', [WriterController::class, 'update']);
Route::delete('writers/{id}', [WriterController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('news-labels', [NewsLabelController::class, 'index']);
Route::post('news-labels', [NewsLabelController::class, 'store']);
Route::get('news-labels/{id}', [NewsLabelController::class, 'show']);
Route::put('news-labels/{id}', [NewsLabelController::class, 'update']);
Route::delete('news-labels/{id}', [NewsLabelController::class, 'destroy']);

Route::get('news', [NewsController::class, 'index']);
Route::post('news', [NewsController::class, 'store']);
Route::get('news/{id}', [NewsController::class, 'show']);
Route::put('news/{id}', [NewsController::class, 'update']);
Route::delete('news/{id}', [NewsController::class, 'destroy']);

Route::get('labels', [LabelController::class, 'index']);
Route::post('labels', [LabelController::class, 'store']);
Route::get('labels/{id}', [LabelController::class, 'show']);
Route::put('labels/{id}', [LabelController::class, 'update']);
Route::delete('labels/{id}', [LabelController::class, 'destroy']);

Route::get('images', [ImageController::class, 'index']);
Route::post('images', [ImageController::class, 'store']);
Route::get('images/{id}', [ImageController::class, 'show']);
Route::put('images/{id}', [ImageController::class, 'update']);
Route::delete('images/{id}', [ImageController::class, 'destroy']);

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::put('categories/{id}', [CategoryController::class, 'update']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
