<?php
include_once('common/header.php');
include_once('../config/init.php');
$catID = isset($_GET['id']) ? $_GET['id']:null;
$posts = get_posts($connection,null,$catID);
?>
             
<?php
foreach($posts as $post)
{
?>
    <h2><a href="../index.php?id=<?php echo $post['postID'];?>"><?php echo $post['postTitle'];?></a></h2>
    <div><?php echo nl2br($post['postContent'])?></div><br>
    <p>Posted on <?php echo date("d-m-Y h:i:s",strtotime($post["postDate"]));?> in <a href="view/category.php?id=<?php echo $post['id'] ?>"><?php echo $post['name']; ?></a></p>
    
    <?php
		if(isset($_SESSION['username']))
		{
		    if(is_admin($connection,$_SESSION['username']))
		    {
		    echo '<div id="menuops"><ul>
			<li><a href="view/delete_post.php?id='.$post['postID'].'">Delete Post</a></li>
<li><a href="view/edit_post.php?id='.$post['postID'].'">Edit Post</a></li>
			
			</ul>
			</div>';
		    }
		}
	    ?>
	    
	    
<?php
}
?> 
<?php include('common/footer.php') ?>
