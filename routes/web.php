<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('tasks', [
        'tasks' => Task::all()
    ]);
});

Route::get('create', function () {
    return view('create');
})->name('create.task');


Route::post('/task-store', [TaskController::class, 'store'])->name('task.store');
