<?php

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

Route::get('/', function () {
    return view('home')->with('name', 'Stranger');
});

Route::get('/dev', function () {
    $quest = DB::table('quest')->get();
    // return $quest;
    // return view('home2',
    // ['quest'=> $quest,
    //  'name'=> 'stranger']);
    return view('home2');
});

Route::get('/quest', function () {
    $quest = DB::table('quest')->get();
    return view('quest.index')
    ->with('quest', $quest)
    ->with('name', "Stranger");
});

Route::get('/quest/{id}', function ($id) {
    // dd($id);
    $quest = DB::table('quest')->find($id);
    // dd($quest);
    return view('quest.show')
    ->with('quest', $quest)
    ->with('name', "Stranger");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
