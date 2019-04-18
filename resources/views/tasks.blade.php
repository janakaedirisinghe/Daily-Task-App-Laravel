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
    			<h1>Daily Tasks</h1>
	    			<div class="row">
			    				<div class="col-md-12">
			    						@foreach($errors->all() as $error)
			    							<div class="alert alert-danger" role="alert">
			    								{{$error}}
			    							</div>

			    						@endforeach

			    					<form method="post" action="/saveTask">
			    						{{csrf_field()}}
				    					<input type="text" class="form-control" name="task" placeholder="Input your task"><br>
				    					<input type="submit" class="btn btn-primary" name="submit" value="save">
				    					<input type="button" class="btn btn-warning" name="clear" value="clear">
			    					</form>
			    					<br><br>
			    					<table class="table table-dark">
			    					<tr>
			    						<th>ID</th>
			    						<th>Task</th>
			    						<th>Completed</th>
			    					</tr>
			    			<!--		@foreach($tasks as $task)
			    					<tr>
			    						<td>{{$task->id}}</td>
			    						<td>{{task->task}}</td>
			    						<td>{{$task->iscompleted}}</td>


			    					</tr>
			    					@endforeach -->
			    					</table>
			    				</div>
	    			</div>

    	</div>
    </div>

  </body>
</html>