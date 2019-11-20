<?php


use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if (App::environment('local')) {

    // Rutas de los Componentes de Admin LTE 3
    Route::get('dashboard-v1', function () { return view('componentes.dashboard.dashboard-v1'); });
    Route::get('dashboard-v2', function () { return view('componentes.dashboard.dashboard-v2'); });
    Route::get('dashboard-v3', function () { return view('componentes.dashboard.dashboard-v3'); });

    Route::get('widgets', function () { return view('componentes.widgets'); });

    Route::get('chartjs', function () { return view('componentes.charts.chartjs'); });
    Route::get('flot', function () { return view('componentes.charts.flot'); });
    Route::get('inline', function () { return view('componentes.charts.inline'); });

    Route::get('general', function () { return view('componentes.ui.general'); });
    Route::get('icons', function () { return view('componentes.ui.icons'); });
    Route::get('buttons', function () { return view('componentes.ui.buttons'); });
    Route::get('sliders', function () { return view('componentes.ui.sliders'); });

    Route::get('elementos-generales', function () { return view('componentes.form.general'); });
    Route::get('elementos-avanzados', function () { return view('componentes.form.avanzados'); });
    Route::get('elementos-editor', function () { return view('componentes.form.editor'); });

    Route::get('table-simple', function () { return view('componentes.table.simple'); });
    Route::get('table-data', function () { return view('componentes.table.data'); });

    Route::get('calendar', function () { return view('componentes.calendar'); });

    Route::get('mailbox-inbox', function () { return view('componentes.mailbox.inbox'); });
    Route::get('mailbox-compose', function () { return view('componentes.mailbox.compose'); });
    Route::get('mailbox-read', function () { return view('componentes.mailbox.read'); });

    Route::get('pages-invoice', function () { return view('componentes.pages.invoice'); });
    Route::get('pages-profile', function () { return view('componentes.pages.profile'); });

}




