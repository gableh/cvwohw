<?php include_once('header.php') ?>
<?php include_once('config/init.php');
session_start();
if(isset($_SESSION['username'])){
echo "Welcome,".$_SESSION['username']."!";
}
    $posts = (isset($_GET['id'])?get_posts($connection,$_GET['id']):get_posts($connection));

?>
<div class = "container">
    <div class ="jumbotron">
	<?php
	    
	    foreach($posts as $post){
		
		if(!category_exists($connection,'name',$post['name']))
		{
		    $post['name'] = 'Uncategorized';
		}
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
    </div>
</div>
<?php include('footer.php') ?>
