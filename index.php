<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
   <div class="container">
    <br>
    <a class="btn btn-primary pull-right" href="admin/login.php">Login</a><br><br><br><br>
    <h2 class="text-center">Welcome to Student Management System</h2>
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
          <table class="table table-bordered">
        <tr>
          <td colspan="2" class="text-center"><label> Student Information</label></td>
          <br>
        </tr>
        <tr>
          <td><label for="choose">Choose</label></td>
          <td> 
            <select class="form-control" id="choose" name="choose">
              <option value="">select</option>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>              
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="roll">Roll</label></td>
          <td><input class="form-control" type="text" name="roll" pattern="[0-9]{6}" placeholder="Roll"></td>
          
        </tr>
        <tr>          
          <td colspan="2"> <input class="form-control btn btn-primary" type="submit" name="show_info" value="Show Info"></td>
        </tr>
      </table>

        </div>
        
      </div>
      
    </form>
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>