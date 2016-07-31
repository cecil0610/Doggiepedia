<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/incidence', function () {
	$categories = DB::table('categories')->get();
	return view('incidence',[
		'categories' => $categories
	]);
});

Route::get('/Age', function() {
	$injury_ages = DB::table('injury_ages')->get();
	$total = DB::table('injury_ages')->sum('number');
	return view('age', [
		'ages' => $injury_ages,
		'total' => $total
	]);
});

Route::get('/Location', function() {
	$injury_territories = DB::table('injury_territories')->get();
	$total = DB::table('injury_territories')->where('territory_name', '=', 'Hamilton')->sum('number');
	return view('location', [
		'locations' => $injury_territories,
		'total' => $total
	]);
});

Route::get('/Breed', function() {
	$injury_breeds = DB::table('control_statistics')->get();
	$total = DB::table('control_statistics')->sum('value');
	return view('breed', [
		'breeds' => $injury_breeds,
		'total' => $total
	]);
});
