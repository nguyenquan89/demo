<?php
App::booted(function() {
	$namespace = 'Sudo\Demo\Http\Controllers';
	
	Route::namespace($namespace)
		->name('app.')
		// ->prefix(config('app.admin_dir'))
		->middleware('web', 'demo')
		->group(function() {
		// view
			Route::get('/', 'DemoController@index')->name('home');
	});
});