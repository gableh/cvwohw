<?php include_once('header.php') ?>
<?php
    ini_set('display_errors',1);
    include_once('config/init.php');
    foreach(get_categories($connection) as $category){
?>
	<p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a> - <a href="delete_category.php?id=<?php echo $category['id']; ?>">Delete</a></p>
<?php
    }
?>
    

<?php include_once('footer.php') ?>
