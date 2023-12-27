<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\EventController;
USE Illuminate\Support\Carbon;
use Illuminate\Http\Request;

//    OJO - aqui el nombre real de la ruta es (admin.home), solo que admin
//    no aparece por que, se codifico en RoutreServiceProvide

// Protejiendo ruta
// middleware('can:Ver dashboard') - SEGURIDAD - PERMISO


Route::get('',[HomeController::class,'index'])->middleware('can:Ver dashboard')->name('home');

// OJO - aqui el nombre real de la ruta es (admin.roles), solo que admin
// no aparece por que, se codifico en RoutreServiceProvide

// IMPORTANTE: La ruta de tipo resource, genera las 7 rutas necesarias para hacer un CRUD COMPLETO
// la SEGURIDAD DE PERMISOS se maneja desde su controlador, usando __constructor()
Route::resource('roles',RoleController::class)->names('roles');

Route::resource('users', UserController::class)->names('users');

Route::resource('projects', ProjectController::class)->names('projects');

// FullCalendar
Route::get('event',[EventController::class,'index'])->name('agenda');

//NEWT
Route::get('/event-feed', function (Request $request) {
    $left = Carbon::create($request->input('start'));
    // left = 2019-12-31T23:00:00.000000Z (always)
    $right = Carbon::create($request->input('end'));
    // right = 2019-12-31T23:00:00.000000Z (always)

    //only for testing:
    $eventOutput = [
        [
            'id' => 1,
            'resourceId' => 'a',
            'title' => 'Test',
            'start' => '2023-12-11T00:00:00.000000Z',
            'end' => '2023-12-11T02:00:00.000000Z',
            'left' => $left,
            'right' => $right,
        ]
     ];

    return json_encode($eventOutput);
});
