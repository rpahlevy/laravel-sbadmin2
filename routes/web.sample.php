<?php

Route::prefix('sample')->group(function() {
	Route::get('/', 'SampleController@index')->name('sampleDashboard');
	
	// components
	Route::get('buttons', 'SampleController@buttons')->name('sampleButtons');
	Route::get('cards', 'SampleController@cards')->name('sampleCards');
	
	// utilities
	Route::get('colors', 'SampleController@colors')->name('sampleColors');
	Route::get('borders', 'SampleController@borders')->name('sampleBorders');
	Route::get('animations', 'SampleController@animations')->name('sampleAnimations');
	Route::get('others', 'SampleController@others')->name('sampleOthers');
	
	// pages
	Route::get('login', 'SampleController@login')->name('sampleLogin');
	Route::get('register', 'SampleController@register')->name('sampleRegister');
	Route::get('forgot-password', 'SampleController@forgotPassword')->name('sampleForgotPassword');
	Route::get('404', 'SampleController@error404')->name('sample404');
	Route::get('blank', 'SampleController@blank')->name('sampleBlank');
	
	Route::get('charts', 'SampleController@charts')->name('sampleCharts');	
	Route::get('tables', 'SampleController@tables')->name('sampleTables');
});