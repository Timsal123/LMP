<?php 
session_start();
?>
<style>
.box{
    background-color:#F0E68C;
}
form{
    padding:30px;
}
</style>
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
   <a class="navbar-brand" href="index.php" >LIBRARY</a>
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
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="box">
<form action="update_password.php" method="post">
<div class="form-group">
<label for="">Current Password:</label>
<input type="text" class="form-control" name="old_password">
</div>
<div class="form-group">
<label for="">New Password:</label>
<input type="text" class="form-control" name="new_password">
</div>
<button type="submit" class="btn btn-warning" name="update">Change Password</button>
</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
