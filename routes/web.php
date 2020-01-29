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

Route::localizedGroup(function () {
	Route::get('/', function () {
		return view('main', [
	        /*'contacts' => \App\Contacts::find(1),
            'reviews' => \App\Reviews::get(),
            'portfolios' => \App\Portfolios::orderBy('numb', 'asc')->get(),
            'galleries' => \App\Galleries::find(1),*/
            'controller' => new \App\Http\Controllers\Controller()
        ]);
	});
});

/*Auth::routes();

Route::get('/home', function () {
	return redirect('/admin');
});*/