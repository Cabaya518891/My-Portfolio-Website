<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Certificate;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome'); // or return view('index'); if you renamed it
});
Route::get('/', function () {
    $projects = Project::all();
    return view('welcome', compact('projects'));
});
Route::get('/', function () {
    return view('welcome', [
        'projects' => Project::all(),
        'certificates' => Certificate::all(),
    ]);
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');