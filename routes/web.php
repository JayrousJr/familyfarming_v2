<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/',[RoutingController::class,'home'])->name('home');
Route::get('about',[RoutingController::class,'about'])->name('about');
Route::get('service',[RoutingController::class,'service'])->name('service');
Route::get('contact',[RoutingController::class,'contact'])->name('contact');
Route::get('project',[RoutingController::class,'project'])->name('project');
Route::get('service/Ai88LKJSFI{service}HKJI74987',[RoutingController::class,'single_Service'])->name('ss');
Route::get('project/pro{project}HKJI74987',[RoutingController::class,'project_single'])->name('ps');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
