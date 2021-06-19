<?php 
session_start();
$connection=mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,"libdata");
$boook_name= "";
$book_author= "";
$book_no = "";
$query = "select book_name,book_author,book_no from issued_books where student_id = $_SESSION[id] and status = 1";
?>
<!DOCTYPE html>
<html>
<head>
<title>User Dashboard</title>
<meta charset="utf-8" name="viewpoint" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
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
<div class="col-md-8" style="margin-left:200px;">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">

<table class= "table-bordered" id="myTable">
  <tr class="header">
    <th>Book Name</th>
    <th>Book Author</th>
    <th>Book Number</th>

</tr>
  <?php 
  $query_run = mysqli_query($connection,$query);
  while($row =mysqli_fetch_assoc($query_run)){
      $book_name = $row['book_name'];
      $book_author = $row['book_author'];
      $book_no = $row['book_no'];

      ?>
      <tr>
      <td><?php echo $book_name;?></td>
      <td><?php echo $book_author;?></td>
      <td><?php echo $book_no;?></td>

      </tr>
<?php
  }
  ?>
</table>
</div>
<div class="col-md-2"></div>
<div class="col-md-2"></div>


        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

  <script>
  $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
  </script>


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>