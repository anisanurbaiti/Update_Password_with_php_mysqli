<?php 
include 'database_connection.php';  
$id = $_POST['id'];
$var_Username  = $_POST['username'];
$var_UserEmail     = $_POST['email'];
$var_UserPassword=md5($_POST['password']);
$var_Nohp = $_POST['no_hp'];

mysqli_query($konek,"UPDATE login_secure set 
	username='$var_Username', 
	email='$var_UserEmail', 
	password='$var_UserPassword', 
	no_hp='$var_Nohp' 
	where id='$id'");

 echo "<script>alert('User berhasil dupdate'); window.location=('index.php')</script>";
 
?>