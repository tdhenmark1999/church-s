<?php

$this->group([

	/**
	*
	* Backend routes main config
	*/
	'namespace' => "System", 
	'as' => "system.", 
	'prefix'	=> "admin",
	// 'middleware' => "", 

], function(){

	$this->group(['prefix' => "info", 'as' => "info."], function () {
		$this->get('/',['as' => "index", 'uses' => "InfoController@index"]);
		$this->get('create',['as' => "create", 'uses' => "InfoController@create"]);
		$this->post('create',['uses' => "InfoController@store"]);
		$this->get('edit/{id?}',['as' => "edit", 'uses' => "InfoController@edit"]);
		$this->post('edit/{id?}',['uses' => "InfoController@update"]);
		$this->any('delete/{id?}',['as' => "destroy", 'uses' => "InfoController@destroy"]);
	});

	
});