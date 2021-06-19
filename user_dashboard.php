<?php 
session_start();
function get_user_issue_book(){
   $connection=mysqli_connect("localhost","root",""); 
   $db=mysqli_select_db($connection,"libdata");
   $user_issue_book="";
   $query = "select count(*) as user_issue_book from issued_books where student_id = $_SESSION[id]";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)){
      $user_issue_book = $row['user_issue_book'];
}
return($user_issue_book);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<meta charset="utf-8" name="viewpoint" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
   <div class="navbar-header">
   <a class="navbar-brand" href="user_dashboard.php" >DASHBOARD</a>
   </div>
   <span><strong style="color:white;">Welcome:<?php echo $_SESSION['name']; ?></strong></span>
   <span><strong style="color:white;">Email:<?php echo $_SESSION['email']; ?></strong></span>

   <ul class="nav navbar-nav navbar-right">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="view_profile.php">View Profile</a>
    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
    <a class="dropdown-item" href="change_password.php">Change Password</a>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
    </li>
   </ul>
   </div>
</nav><br>
<span><marquee>Welcome to the Library</marquee></span><br><br><br><br>
<div class="row">
<div class="col-md-3">
<div class="card bg-light" style="width:300px;">
<div class="card-header">ISSUED BOOOKS:</div>
<div class="card-body">
<p class="card-text">Total Issued Books:<?php echo get_user_issue_book(); ?></p>
<a href="view_issuedBooks.php" class="btn btn-danger" target="_blank">View</a>
</div>
</div>
</div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>