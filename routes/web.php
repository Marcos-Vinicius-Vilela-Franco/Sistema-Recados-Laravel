<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
 Route::get('/', function(){
     return view('welcome');
 })->name('home');

Route::get('/model', function () {
    //$recados = \App\Models\Recado::all();
    //return $recados;
    //return \App\Models\User::where('name', 'Marcos Vinicius V Franco')->first();
    $user = \App\Models\User::find(4);
    $store = $user->recado_superior()->create([
        'recado' => 'recado teste 2',
        'priori' => 0,
        'slug' => 'recado-teste-2' 
    ]);
    dd($store);
    return $user->recado;
});

Route::group(['middleware'=>['auth']],function(){
    Route::prefix('admin')->namespace('App\\Http\\Controllers\\Admin')->group(function () {
        Route::prefix('recados')->name('admin.recados.')->group(function () {
            Route::get('/', 'RecadoController@index')->name('index');
            Route::get('/create', 'RecadoController@create')->name('create');
            Route::post('/recados', 'RecadoController@recados')->name('recado');
            Route::get('/{recado}/edit','RecadoController@edit')->name('edit');
            Route::post('/update/{recado}','RecadoController@update')->name('update');
            Route::get('/destroy/{recado}','RecadoController@destroy')->name('destroy');
        });
    });
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
