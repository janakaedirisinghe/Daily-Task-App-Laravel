<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request){
    	//dd($request ->all());
    	$task = new Task();
    	$this->validate($request,[
    		'task' => 'required|max:100|min:5',

    	]);

    	$task->task=$request->task;
    	$task->save();

    	$data = Task::all();
    	//dd($data);

    	return redirect()->back();
    	 //return view('tasks')->with('tasks',$data);
    }

}
