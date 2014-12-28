<?php include_once('view/common/header.php') ?>
<?php include_once('config/init.php');
$posts = (isset($_GET['id'])?get_posts($connection,$_GET['id']):get_posts($connection));

?>

	
		<div id="main" class = "container clear top">
			<div class ="row">
				
					<div class ="col-md-8">
						<?php

						foreach($posts as $post){

							?>
							<h2><a href="index.php?id=<?php echo $post['postID'];?>"><?php echo $post['postTitle'];?></a></h2>

							<div><?php echo nl2br($post['postContent'])?></div>
							<h5><i>Posted on <?php echo date("d-m-Y h:i:s",strtotime($post["postDate"]));?> in <a href="view/category.php?id=<?php echo $post['id'] ?>"><?php echo $post['name']; ?></a></i></h5>
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
					</div>
				
			</div>
		</div>
	

<footer class ="footer">
	<?php include('view/common/footer.php') ?>
</footer>
</body>
</html>