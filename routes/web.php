<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\FolderController;

Route::get('/', function () {
    return view('app');
});

// Show all notes
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

// Create a new note
Route::get('/notes/new', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

// Display a specific note
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

// Edit a specific note
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');

// Delete a specific note
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');

// Create a new folder
Route::get('/folders/new', [FolderController::class, 'create'])->name('folders.create');
Route::post('/folders', [FolderController::class, 'store'])->name('folders.store');

// Display a specific folder
Route::get('/folders/{folder}', [FolderController::class, 'show'])->name('folders.show');

// Edit a specific folder
Route::get('/folders/{folder}/edit', [FolderController::class, 'edit'])->name('folders.edit');
Route::put('/folders/{folder}', [FolderController::class, 'update'])->name('folders.update');

// Delete a specific folder
Route::delete('/folders/{folder}', [FolderController::class, 'destroy'])->name('folders.destroy');
