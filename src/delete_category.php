
<?php
ini_set('display_errors',1);
include_once('config/init.php');
    if(!(isset($_GET['id']))){
	header("Location: index.php");
	die();
    }
    $id=$_GET["id"];
    mysqli_query($connection,"UPDATE blog_posts SET catID = 24 WHERE catID = {$id}");
    deleteStuff($connection,"blog_categories","id",$_GET["id"]);

    header("Location: category_list.php");
    die();
?>
