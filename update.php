<?php 
session_start();
$connection=mysqli_connect("localhost","root",""); 
$db=mysqli_select_db($connection,"libdata");
$query = "update users set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]' where id='$_SESSION[id]'";
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Profile updated successfully");
window.location.href="index.php";
</script>
