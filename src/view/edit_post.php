<?php include_once('common/header.php')?>

<?php include_once('../config/init.php');
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
    $post = get_posts($connection,$_GET['id']);


    if(isset($_POST['title'],$_POST['content'],$_POST['category'])){
	$errors= array();
	$title    = trim($_POST['title']);
	$content  = trim($_POST['content']);
	
	if(empty($title)){
	    $errors[] ="Need a title";
	}
	if(empty($content)){
	    $errors[] ="Need content";
	}
	if(!category_exists($connection,'id',$_POST['category'] )){
	    $errors[] ="Category does not exist!";
	}
	if(strlen($title)>255){
	    $errors[] ="title cannot be longer than 255 characters";
	}
	if(empty($errors)){
	    $id = $_GET['id'];
	    edit_post($connection,$_GET['id'],$title,$content,$_POST['category']);
	    header("Location: ../index.php?id={$post[0]['postID']}");
	    die();
	}
    }
?>
<div class ="container">
<h1>Edit Post</h1>
<?php
    if(isset($errors) && !empty($errors)){
	echo '<ul><li>',implode('</li><li>',$errors),'</li></ul>';
    }
?>
<form action= "" method = "post">
    <div>
	<label for = "title">Title</label>
	<input type="text" name= "title" value= "<?php echo $post[0]['postTitle']; ?>">
    </div>
    <br>
    <div>
	<label for ="content">Content</label><br>
	<textarea name = "content" rows="15" cols="50"><?php echo $post[0]['postContent'];?></textarea>
    </div>
    <div>
	<label for ="category">Category</label>
	<select name = "category">
	    <?php	
		foreach(get_categories($connection) as $category){
		$selected = ($category['name']==$post[0]['name']) ?'selected': '';
	    ?>
		    <option value="<?php echo $category['id'];?>"<?php echo $selected;?>><?php echo $category['name'];?></option>
	    <?php
		}
	    ?>
	    
	</select>
    </div>
    <div>
	<input type ="submit" value ="Edit Post">
    </div>
</form>
</div>
<hr>
<?php include_once('common/footer.php')?>
