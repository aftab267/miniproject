<?php
require('dbcon.php');
session_start();
if(isset($_SESSION['user_login'])){
  header('location:index.php');
}
if(isset($_POST['login'])){
   $username=$_POST['username'];   
   $password=$_POST['password'];

   $query="SELECT * FROM users WHERE username='$username'";
   $user_check=mysqli_query($link,$query);
   if(mysqli_num_rows($user_check)>0){
      
    
   }else{
   $username_not_found="This Username not found";
   }
   $row=mysqli_fetch_assoc($user_check);  
   if($row['status']=='active'){
       $_SESSION['user_login']=$username;
       header('location:index.php');
      }else{
        $status_inactive="Your status is inactive";
      }
      if($row['password']==$password){
      
    }else{
     $wrong_password="wrong password";
    }
   
   
   // header('location:../index.php');
}

?>


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
    <h2></h2>
       <div class="container">
    <br>
    <a class="btn btn-primary pull-right" href="registration.php">Register</a><br><br><br><br>
    <h2 class="text-center">Welcome to Login</h2>
    <form action="" method="POST">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
          <table class="table table-bordered">
        <tr>
          <td colspan="2" class="text-center"><label> Login Information</label></td>
          <br>
        </tr>
        <tr>
          <td><label for="choose">Username</label></td>
          <td> 
            <input class="form-control" type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>">
          </td>
        </tr>
        <tr>
          <td><label for="roll">Password</label></td>
          <td><input class="form-control" type="text" name="password" value="<?php if(isset($password)){echo $password;} ?>"></td>
          
        </tr>
        <tr>          
          <td colspan="2"> <input class="form-control btn btn-primary" type="submit" name="login" value="Login"></td>
        </tr>
      </table>

        </div>

        
      </div>
     
      
    </form>
    <?php if(isset($username_not_found)){ echo '<div class="alert alert-danger col-md-4 offset-md-4 ">'. $username_not_found .'</div>';}?>
    <?php if(isset($wrong_password)){ echo '<div class="alert alert-danger col-md-4 offset-md-4 ">'. $wrong_password .'</div>';}?>
    <?php if(isset($status_inactive)){ echo '<div class="alert alert-danger col-md-4 offset-md-4 ">'. $status_inactive .'</div>';}?>
     
   </div>
    
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>