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

Route::get('/', function(){
	return view('welcome');

})->middleware('auth');

	

Route::get('algoritmos', function(){
	return view('home.algoritmos.algoritmos');
})->middleware('auth');


Route::group(['prefix' => 'algoritmo'], function(){
	
	Route::group(["prefix" => 'busqueda-ciega'], function(){
		
		Route::get('anchura', function(){
			return view('home.algoritmos.algoritmo.busquedaciega.anchura');
		});


		Route::get('profundidad', function(){
			return view('home.algoritmos.algoritmo.busquedaciega.profundidad');
		});
	});


	Route::group(["prefix" => 'busqueda-guiada'], function(){
		
		Route::get('ruta-corta', function(){
			return view('home.algoritmos.algoritmo.busquedaguiada.ruta_corta');
		});


		
	});
	
});


Route::group(['prefix' => 'animaciones', 'middleware' => 'auth'], function(){

	Route::get('anchura', [
		'uses' => 'grafoController@showAnchura',
		'as' => 'grafoAnimation'
	]);

	Route::get('profundidad', [
		'uses' => 'grafoController@showProfundidad',
		'as' => 'grafoAnimation'
	]);


	Route::get('ruta-corta/{id}',[
		'uses' => 'grafoController@showRuta',
		'as' => 'grafoAnimation'
	]);


	Route::group(['prefix' => 'grafo'], function(){

		Route::get('edit/{id}', [
			'uses' => 'grafoController@edit',
			'as' => 'grafoEdit'
		]);

		Route::post('store', [
			'uses' => 'grafoController@store',
			'as' => 'grafoStore'
		]);

		Route::get('create', [
			'uses' => 'grafoController@create',
			'as' => 'grafoCreate'
		]);

		Route::post('update/{id}', [
			'uses' => 'grafoController@update',
			'as' => 'grafoUpdate'
		]);

		Route::get('destroy/{id}', [
			'uses' => 'grafoController@destroy',
			'as' => 'grafoDestroy'
		]);

		Route::group(['prefix' => 'edge'], function(){
			Route::get('destroy/{id}', [
				'uses' => 'edgesController@destroy',
				'as' => 'edgeDestroy'
			]);

			Route::post('store', [
				'uses' => 'edgesController@store',
				'as' => 'edgeStore'
			]);
		});

		
	});

});


	


Route::get('auth/login' , [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'usuarioLogIn'
]);

Route::post('auth/login' , [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'usuarioLogIn'
]);


Route::post('auth/register' , [
	'uses' => 'registerController@store',
	'as' => 'usuarioRegister'
]);

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegisterController@confirm'
]);



Route::auth();

