<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CalificacioneController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\ControlMateriaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::prefix('alumnos')->group(function () {
    Route::get('/', [AlumnoController::class, 'index'])->name('alumnos.index');
    Route::get('/create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::post('/', [AlumnoController::class, 'store'])->name('alumnos.store');
    Route::get('/{id}', [AlumnoController::class, 'show'])->name('alumnos.show');
    Route::get('/{id}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::patch('/{Alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
    Route::delete('/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
});

Route::prefix('calificaciones')->group(function () {
    Route::get('/', [CalificacioneController::class, 'index'])->name('calificaciones.index');
    Route::get('/create', [CalificacioneController::class, 'create'])->name('calificaciones.create');
    Route::post('/', [CalificacioneController::class, 'store'])->name('calificaciones.store');
    Route::get('/{id}', [CalificacioneController::class, 'show'])->name('calificaciones.show');
    Route::get('/{id}/edit', [CalificacioneController::class, 'edit'])->name('calificaciones.edit');
    Route::patch('/{Calificacione}', [CalificacioneController::class, 'update'])->name('calificaciones.update');
    Route::delete('/{id}', [CalificacioneController::class, 'destroy'])->name('calificaciones.destroy');
});

Route::prefix('maestros')->group(function () {
    Route::get('/', [MaestroController::class, 'index'])->name('maestros.index');
    Route::get('/create', [MaestroController::class, 'create'])->name('maestros.create');
    Route::post('/', [MaestroController::class, 'store'])->name('maestros.store');
    Route::get('/{id}', [MaestroController::class, 'show'])->name('maestros.show');
    Route::get('/{id}/edit', [MaestroController::class, 'edit'])->name('maestros.edit');
    Route::patch('/{Maestro}', [MaestroController::class, 'update'])->name('maestros.update');
    Route::delete('/{id}', [MaestroController::class, 'destroy'])->name('maestros.destroy');
});

Route::prefix('materias')->group(function () {
    Route::get('/', [MateriaController::class, 'index'])->name('materias.index');
    Route::get('/create', [MateriaController::class, 'create'])->name('materias.create');
    Route::post('/', [MateriaController::class, 'store'])->name('materias.store');
    Route::get('/{id}', [MateriaController::class, 'show'])->name('materias.show');
    Route::get('/{id}/edit', [MateriaController::class, 'edit'])->name('materias.edit');
    Route::patch('/{Materias}', [MateriaController::class, 'update'])->name('materias.update');
    Route::delete('/{id}', [MateriaController::class, 'destroy'])->name('materias.destroy');
});


Route::prefix('clinicas')->group(function () {
    Route::get('/', [ClinicaController::class, 'index'])->name('clinicas.index');
    Route::get('/create', [ClinicaController::class, 'create'])->name('clinicas.create');
    Route::post('/', [ClinicaController::class, 'store'])->name('clinicas.store');
    Route::get('/{id}', [ClinicaController::class, 'show'])->name('clinicas.show');
    Route::get('/{id}/edit', [ClinicaController::class, 'edit'])->name('clinicas.edit');
    Route::patch('/{clinica}', [ClinicaController::class, 'update'])->name('clinicas.update');
    Route::delete('/{id}', [ClinicaController::class, 'destroy'])->name('clinicas.destroy');
});

Route::prefix('control')->group(function () {
    Route::get('/', [ControlMateriaController::class, 'index'])->name('control-materia.index');
    Route::get('/create', [ControlMateriaController::class, 'create'])->name('control-materias.create');
    Route::post('/', [ControlMateriaController::class, 'store'])->name('control-materias.store');
    Route::get('/{id}', [ControlMateriaController::class, 'show'])->name('control-materias.show');
    Route::get('/{id}/edit', [ControlMateriaController::class, 'edit'])->name('control-materias.edit');
    Route::patch('/{control}', [ControlMateriaController::class, 'update'])->name('control-materias.update');
    Route::delete('/{id}', [ControlMateriaController::class, 'destroy'])->name('control-materias.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
