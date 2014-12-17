
<?php include_once('header.php') ?>
<?php include_once('config/init.php');
    $posts = get_posts($connection);

?>
<div class = "container">
    <div class ="jumbotron">
	<?php
	    
	    foreach($posts as $post){
		if(category_exists($connection,'name',$post['name']))
		{
		    $post['name'] = 'Uncategorized';
		}
		?>
		<h2><a href="index.php?id=<?php echo $post['postID'];?>"><?php echo $post['postTitle'];?></a></h2>
	<?php
	    }
	?> 
    </div>
</div>
<?php include('footer.php') ?>
