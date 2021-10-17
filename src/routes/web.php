<?php




Route::group(['namespace' => 'Astergo\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact.get');
    Route::post('contact', 'ContactController@store')->name('contact.post');
});


