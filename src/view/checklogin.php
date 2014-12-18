<?php include_once('../config/init.php') ?>
<?php 
session_start();
$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);
$username = trim($username);
$password = trim($password);
if(login($connection,$username,$password))
{
    $_SESSION['username'] =$username;
    header("location: ../index.php");
}
else
{
	die("Wrong password");
}

?>
