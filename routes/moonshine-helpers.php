<?php

use App\Http\Controllers\Admin\ClientOptionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas auxiliares del panel administrativo (MoonShine)
|--------------------------------------------------------------------------
|
| Se cargan en RouteServiceProvider con el prefijo y middleware de MoonShine.
| Sirven para selects dependientes y otras ayudas de UI que MoonShine 2.0
| no resuelve de forma nativa (no tiene campos reactivos).
|
*/

Route::get('helpers/clientes-por-producto', [ClientOptionsController::class, 'byProduct'])
    ->name('admin.helpers.clientes-por-producto');

Route::get('helpers/motivos-por-producto', [ClientOptionsController::class, 'tagsByProduct'])
    ->name('admin.helpers.motivos-por-producto');
