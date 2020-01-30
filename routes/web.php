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
			'main' => \App\Mains::find(1),
			'contact' => \App\Contacts::find(1),
			'review' => \App\Reviews::get(),
			'category' => \App\Categories::get(),
			'brand' => \App\Brands::get(),
			'parts' => \App\Parts::get(),
            'controller' => new \App\Http\Controllers\Controller()
        ]);
	});
});

Auth::routes();

Route::get('/home', function () {
	return redirect('/admin');
});