<?php include_once('common/header.php')?>
<?php 
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
if(isset($_POST['title'],$_POST['content'],$_POST['category']))
{
    $errors= array();
    $title    = trim($_POST['title']);
    $content  = trim($_POST['content']);
	
    if(empty($title))
    {
	$errors[] ="Need a title";
    }
    if(empty($content))
    {
	$errors[] ="Need content";
    }
    if(!category_exists($connection,'id',$_POST['category'] ))
    {
	$errors[] ="Category does not exist!";
    }
    if(strlen($title)>255)
    {
	$errors[] ="title cannot be longer than 255 characters";
    }
    if(empty($errors))
    {
    if(isset($_POST['img']))
    {
        add_post($connection,$title,$content,$_POST['category'],$_POST['img']);
        $postID= mysqli_insert_id($connection);
        header("Location: ../index.php?id={$postID}");
        die();
    }

    else{
	   add_post($connection,$title,$content,$_POST['category']);
	   $postID= mysqli_insert_id($connection);
	   header("Location: ../index.php?id={$postID}");
	   die();
        }
    }
    
}
?>
<div class ="container">
<h1>Add a Post</h1>
<?php
if(isset($errors) && !empty($errors))
{
    echo '<ul><li>',implode('</li><li>',$errors),'</li></ul>';
}
?>
<form action= "" method = "post">
    <div>
	<label for = "title">Title</label>
	<input type="text" name= "title" value= "<?php if(isset($_POST['title']))echo $_POST['title']; ?>">
    </div>
    <br>
    <div>
    <label for = "img">Add an image</label>
    <input type="text" name= "img" value= "<?php if(isset($_POST['img']))echo $_POST['img']; ?>">
    </div>
    <div>
	<label for ="content">Content</label><br>
	<textarea name = "content" rows="15" cols="50"><?php if(isset($_POST['content']))echo $_POST['content'];?></textarea>
    </div>
    <div>
	<label for ="category">Category</label>
	<select name = "category">
	    <?php	
		foreach(get_categories($connection) as $category){
	    ?>
		    <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
	    <?php
		}
	    ?>
	    
	</select>
    </div>
    <div>
	<input type ="submit" value ="Add Post">
    </div>
</form>
</div>
<hr>
<?php include_once('common/footer.php')?>
