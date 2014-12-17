
<?php
ini_set('display_errors',1);
include_once('config/init.php');
if(!(isset($_GET['id']))){
    header("Location: index.php");
    die();
}

deleteStuff($connection,"blog_categories",$_GET["id"]);

header("Location: category_list.php");
die();
?>
