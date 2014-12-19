
<?php
include_once('common/header.php');
include_once('../config/init.php');
 if(isset($_SESSION['username']))
    {
	if(!is_admin($connection,$_SESSION['username']))
	{
	      die("Please log in as admin to continue!");
	}
    }
    else
    {
	die("You must be logged in to continue!");
    }
    if(!(isset($_GET['id'])))
    {
	header("Location: ../index.php");
	die();
    }
    $id=$_GET["id"];
    mysqli_query($connection,"UPDATE blog_posts SET catID = 24 WHERE catID = {$id}");
    deleteStuff($connection,"blog_categories","id",$_GET["id"]);
    header("Location: category_list.php");
    die();
?>
<?php include_once('common/footer.php')?>
