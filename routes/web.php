<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
	return view('about');
});

/*Route::post('/saveTask','TaskController@store');

Route::get('/tasks',function(){
	//$data = App\Task::all();
		
		return view('tasks');
});*/

Route::get('/tasks',function(){
	return view('tasks');
});

