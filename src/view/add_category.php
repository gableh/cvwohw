
<?php
include_once('../config/init.php');
if(isset($_POST['name']))
{
    $name = trim($_POST['name']);
    if(empty($name))
    {
	$error ="Please submit a category name";
    }
    else if((category_exists($connection,'name',$name)))
    {
	$error = 'Category already exists!';
    }
    else if(strlen($name) >24)
    {
	$error = 'Category names can only contain up to 24 characters';
    }
    if(!isset($error))
    {
	add_category($connection,$name);
	header("Location: add_post.php");
	die();
	
    }

}
?>
<?php include_once('common/header.php') ?>

<h1>Add Category</h1>
<?php
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
    if(isset($error))
    {
	echo "<p>{$error}</p>\n";
    }
?>
<form action ="" method ="post">
    <div>
	<label for= "name">Name</label>
	<input type = "text" name="name" value = "">
    </div>
    <div>
	<input type ="submit" value = "Add Category">
    </div>
</form>

<?php include_once('common/footer.php') ?>
