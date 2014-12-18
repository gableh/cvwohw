<?php include_once('common/header.php') ?>
<?php
    include_once('../config/init.php');
    foreach(get_categories($connection) as $category){
?>
	<p><a href="view/category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a> - <a href="view/delete_category.php?id=<?php echo $category['id']; ?>">Delete</a></p>
<?php
    }
?>
    

<?php include_once('common/footer.php') ?>
