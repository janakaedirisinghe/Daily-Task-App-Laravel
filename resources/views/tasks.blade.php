<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
         <div class="container">
           <div class="text-center">
             <br><h1>Daily Task</h1>
             <div class="row">
               <div class="col-md-12">

                @foreach($errors->all() as $error)
                  <div class="alert alert-danger" role="alert">
                    {{$error}}
                  </div>

                @endforeach
                <form method="post" action="/saveTask">
                  {{csrf_field()}}
                 <input type="text" name="task" class="form-control" placeholder="Enter your task here">
                  <input type="submit" class="btn btn-dark" name="submit"> 
                  <input type="submit" name="" class="btn btn-warning" value="CLEAR">
                

                 </form>
                 <br><br>
                 <TABLE class="table table-dark">
                   <tr>
                     <th>ID</th>
                     <th>Task</th>
                     <th>Completed</th>
                     <th>Action</th>

                   </tr>
                  @foreach($tasks as $task)
                   <tr>
                     <td> {{$task->id}} </td>
                     <td> {{$task->task}} </td>
                     <td> 
                     @if($task->iscompleted)
                     <button class="btn btn-success">Completed</button> 
                     @else
                     <button class="btn btn-warning ">Not Completed</button>
                     @endif
                     </td>
                     <td>
                    @if(!$task->iscompleted)
                       <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">mark as completed</a>
                    @else
                        <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">mark as not completed</a>
                    @endif
                    <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                    <a href="/updatetask/{{$task->id}}" class="btn btn-primary">Update</a>
                     </td>
                   </tr>
                   @endforeach

                 </TABLE>
               </div>
             </div>
           </div>
         </div>


   
  </body>
</html>