<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
   
   public function store(Request $request){
   		//dd($request->all());
   			$task = new Task();

   			$this->validate($request,[
				'task'=> 'required|max:100|min:5',
   			]);



   			$task->task = $request->task;
   			$task->save();
   			$data=Task::all();
   			//dd($data);
   			return view('tasks')->with('tasks',$data);
   }


   public function UpdateTaskAsCompleted($id){

   	$task=Task::find($id);
   	$task->iscompleted=1;
   	$task->save();
   	return redirect()->back();


   }

   public function UpdateTaskAsNotCompleted($id){

   	$task=Task::find($id);
   	$task->iscompleted=0;
   	$task->Save();
   	return redirect()->back();

   }

   public function DeleteTask($id){
      $task=Task::find($id);
      $task->delete();
      return redirect()->back();


   }

   public function UpdateTaskView($id){
      $task=Task::find($id);
      return view('updatetask')->with('taskdata',$task);

   }
}
