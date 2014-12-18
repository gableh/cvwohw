<?php
include_once('header.php');
include_once('config/init.php');
$catID = isset($_GET['id']) ? $_GET['id']:null;
$posts = get_posts($connection,null,$catID);
?>
             
<?php

    if(!category_exists($connection,'id',$catID)){
	echo 'hihi';	
    }        
    foreach($posts as $post){
    
?>
		<h2><a href="index.php?id=<?php echo $post['postID'];?>"><?php echo $post['postTitle'];?></a></h2>
		<p>Posted on <?php echo date("d-m-Y h:i:s",strtotime($post["postDate"]));?> in <a href="category.php?id=<?php echo $post['id'] ?>"><?php echo $post['name']; ?></a></p>
		<div><?php echo nl2br($post['postContent'])?></div>
	    
		<div id="menuops"> 
	    
		    <ul>
			<li><a href="delete_post.php?id=<?php echo $post['postID'];?>">Delete Post</a></li>
			<li><a href="edit_post.php?id=<?php echo $post['postID'];?>">Edit Post</a></li>
		    </ul>
		</div>
	    
	    
	<?php
	    }
	?> 
<?php include('footer.php') ?>
