<?php
session_start();
require('dbcon.php');
if(isset($_POST['registration'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $username=$_POST['username'];   
   $password=$_POST['password'];
   $c_password=$_POST['c_password'];
   $photo=$_FILES['photo']['name'];
   $query="INSERT INTO users(name,email,username,password,photo,status) VALUES('$name','$email','$username','$password','$photo','inactive')";
   $result=mysqli_query($link,$query);
   if($password==$c_password){
     $password=md5($password);
   }
   $password=md5($password);
   if($result){
   $_SESSION['$data_insert_success']="Data Inserted Successfully.";
   move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
   header('location:registration.php');
   }else{
    $_SESSION['$data_insert_error']="Data error.";
   }

   $input_error=array();

   if(empty($name)){
      $input_error['name']="The Name field is required.";
   }
   if(empty($email)){
      $input_error['email']="The email field is required.";
   }
   if(empty($username)){
      $input_error['username']="The username field is required.";
   }
   if(empty($password)){
      $input_error['password']="The password field is required.";
   }
   if(empty($c_password)){
      $input_error['c_password']="The confirm Password field is required.";
   }   

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
    <br><br>
    <h2 class="">Student Registration Form</h2>
    <?php if(isset($_SESSION['$data_insert_success'])){echo '<div class="alert alert-success">'.$_SESSION['$data_insert_success'].'</div>';}?>
    <?php if(isset($_SESSION['$data_insert_error'])){echo '<div class="alert alert-warning">'.$_SESSION['$data_insert_error'].'</div>';}?>

    
    
    <hr>
    <div class="row">
      <div class="col-md-12">
        <form action="" method="POST" enctype="multipart/form-data" class="form-horizental">
          <div class="form-group">
            <label class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
    <input  class="form-control" type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" placeholder="name">
            </div>
            <level><?php if(isset($input_error['name'])) echo $input_error['name'];?></level>
            <div class="form-group">
            <label class="control-label col-sm-1">Email</label>
            <div class="col-sm-4">
            <input  class="form-control" type="text" value="<?php if(isset($email)){echo $email;}?>" name="email" placeholder="Email">
            </div>
            <level><?php if(isset($input_error['email'])) echo $input_error['email'];?>
            <div class="form-group">
            <label class="control-label col-sm-1">username</label>
            <div class="col-sm-4">
            <input  class="form-control" type="text" value="<?php if(isset($username)){echo $username;}?>" name="username" placeholder="username">
            </div>
            <level><?php if(isset($input_error['username'])) echo $input_error['username'];?>
            <div class="form-group">
            <label class="control-label col-sm-1">password</label>
            <div class="col-sm-4">
            <input  class="form-control" type="text" value="<?php if(isset($password)){ echo $password;}?>" name="password" placeholder="password">
            </div>
            <level><?php if(isset($input_error['password'])) echo $input_error['password'];?>
            <div class="form-group">
            <label class="control-label col-sm-3">confirm Password</label>
            <div class="col-sm-4">
            <input  class="form-control" type="text" value="<?php if(isset($c_password)){echo $c_password;}?>" name="c_password" placeholder="confirm Password">
            </div>
            <level><?php if(isset($input_error['c_password'])) echo $input_error['c_password'];?>
            <div class="form-group">
            <label class="control-label col-sm-1">photo</label>
            <div class="col-sm-4">
            <input  class="form-control" type="file" name="photo" placeholder="photo">
            </div><br>
            <div class="col-sm-4">
            <input  class="btn btn-primary" type="submit" name="registration" value="Registration" >
            </div>
            <hr>
            
            
          </div>
          

        </form>
        <p>If You Have an Account? Than please <a href="login.php">Login</a></p><br><br>
        <footer>
          
          <p>Copyright &copy; 2016 - <?= date('Y') ?> All right reserved.</p>
        </footer>
        
      </div>
      
    </div>
    
     
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>