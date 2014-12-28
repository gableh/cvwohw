<?php include_once('view/common/header.php') ?>
<?php include_once('config/init.php');
$posts = (isset($_GET['id'])?get_posts($connection,$_GET['id']):get_posts($connection));

?>
    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Welcome
                    <small>hello hello</small>
                </h1>
                <?php

                        foreach($posts as $post){

                            ?>
                            <p class ="lead"><a href="index.php?id=<?php echo $post['postID'];?>"><?php echo $post['postTitle'];?></a></p>
                            <?php
                                if($post['postIMG']!= null)
                                {
                                    echo "<img class = 'img-responsive' src =".$post['postIMG'].">";
                                } 
                            ?>
                            <div><?php echo nl2br($post['postContent'])?></div>
                            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo date("d-m-Y h:i:s",strtotime($post["postDate"]));
                                ?> in <a href="view/category.php?id=<?php echo $post['id'] ?>"><?php echo $post['name']; ?></a></p>
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

             <ul class="pager">
                    <li class="next">
                        <a href="#">&rarr; Older</a>
                    </li>
                </ul>   
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                        <?php
                            foreach(get_categories($connection) as $category){
?>
                                <p><a href="view/category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a></p>
                            <?php
                                }
                            ?> 
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>

    </div>

</body>
<?php include('view/common/footer.php') ?>
</html>