<?php include_once('../config/init.php') ?>
<?php 

$name = strip_tags($_POST['name']);
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$password2= strip_tags($_POST['password2']);
$email = strip_tags($_POST['email']);

if($name && $username && $password && $password2 && $email)
{

	if(user_exists($connection,$username)){
		die("User already exists!");
	}
    if(strlen($password)<6)
    {
	die("password must be at least 6 chars long");
    }
    $password = md5($password);
    $password2= md5($password2);
    if($password == $password2)
    {
	if(strlen($name)>255)
	{
	    echo "Max limit is 255 characters";
	}
	else
	{
	    $date = date("Y-m-d");
	    register_user($connection,$name,$username,$password,$email,$date);
	    header("location: loginform.php");
	}
    }
    else
    {
	echo "your passwords do not match!";
    }
}
else
{
    echo "Please fill in all fields!";
} 
?>
