<?php
ini_set('display_errors',1);
include_once('config/init.php');
    if(!(isset($_GET['id']))){
	header("Location: index.php");
	die();
    }
    $id=$_GET["id"];
    deleteStuff($connection,"blog_posts","postID",$_GET["id"]);

    header("Location: index.php");
    die();
?>
