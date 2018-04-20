<?php

Route::group(['middleware' => ['web', 'auth', 'is_admin']], function(){

	Route::get('admin/crm','Onestartup\Crm\AdminCrmController@list')->name('crm.list');
	Route::get('admin/crm/datatable','Onestartup\Crm\AdminCrmController@datatable')->name('crm.datatable');
	Route::get('admin/crm/{id}/show','Onestartup\Crm\AdminCrmController@show')->name('crm.show');
	Route::post('admin/crm/{id}/tracing/store','Onestartup\Crm\AdminCrmController@storeTracing')->name('crm.tracing.store');
});
