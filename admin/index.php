<?php

session_start();
if(!isset($_SESSION['user_login'])){
	header('location:login.php');
}

?>




<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet"  href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    


    <title>Student Management System.</title>
     <script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();
} );</script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index">SMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    	<a class="navbar-brand fa fa-user" href="index"> Welcome:Kazi Aftabur Rahman </a>
    	<a class="navbar-brand fa fa-user-plus" href="index" > Add User </a>
    	<a class="navbar-brand fa fa-user" href="index"> Profile </a>
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a class="nav-link" href="logout.php">Logout</a></button>
    </form>
  </div>
</nav>
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-sm-3">
			<div class="list-group">
			  <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active"></i>
			    Dashboard
			  </a>
			  <a href="index.php?page=add-student" class="list-group-item list-group-item-action">Add Student</a>
			  <a href="index.php?page=all-students" class="list-group-item list-group-item-action">All Student</a>
			  <a href="index.php?page=all-users" class="list-group-item list-group-item-action">All users</a>
			  
			</div>
		</div>
		<div class="col-sm-9">
		
  <?php

  
   if(isset($_GET['page'])){
    $page=$_GET['page'].'.php';
  }else{
    $page='dashboard.php';
  }

  if(file_exists($page)){
    require_once $page;
  }else{
    echo "<h2>File Not Found</h2>";
  }

  
  ?>

		</div>

	</div>


</div>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script text="text/javascript" src="../js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>

<script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
    
    
  </body>
  <footer class="alert alert-primary mt-5 text-center">
    <p> Copyright &copy 2018-<?php echo date('Y')?>  -Student Management System.- All Right reserved</p>
  </footer>
</html>