<?php


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/locate', ['as'=>'home.locate', 'uses'=>'HomeController@locate']);







Route::get('/phpinfoko', function(){
	echo phpinfo();
});

Route::get('/checkdbconn', function(){
	if(DB::connection()->getDatabaseName()){
	   echo "connected sucessfully to database ".DB::connection()->getDatabaseName();
	}
});

Route::get('/env/hostname', function(){
    return gethostname();
});

Route::get('/env', function(){
    $environment = App::environment();
    echo $environment;
});

