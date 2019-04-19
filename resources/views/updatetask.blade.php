<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Task</title>
  </head>
  <body>
   
<br><br><br><br>
    <div class="container">
      <div class="text-center">
        <form action="/updatetasks" method="post">
          {{csrf_field()}}
          <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">
          <input type="hidden" name="id" value="{{$taskdata->id}}">
          <input type="submit" class="btn btn-warning" name="submit" value="Update">
          <input type="submit" class="btn btn-danger" name="" value="Cancel">
        </form>
      </div>
    </div>




  </body>
</html>