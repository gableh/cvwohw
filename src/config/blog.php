<?php
ini_set('display_errors',1);
function add_post($connection,$title,$content,$category){
    $title =mysqli_real_escape_string($connection,$title);
    $content =mysqli_real_escape_string($connection,$content);
    $category = (int)$category;
    mysqli_query($connection,"INSERT INTO blog_posts (catID,postContent,postDate,postTitle) VALUES($category,'{$content}',now(),'{$title}')");
    
}

function edit_post($id,$title,$content,$category){
}

function add_category($connection,$name){
    $name = mysqli_real_escape_string($connection,$name);
    mysqli_query($connection,"INSERT INTO blog_categories (name) VALUES('$name')");
}

function deleteStuff($connection,$table,$id){
    $table = mysqli_real_escape_string($connection,$table);
    $id = (int)$id;
    mysqli_query($connection,"DELETE FROM $table WHERE id = $id");
    
}

function get_posts($connection,$id = null,$catID =null){
    $posts = array();
    $query ="SELECT blog_posts.postID,blog_posts.postTitle,blog_posts.postDate,blog_posts.postContent,blog_categories.id,blog_categories.name
FROM blog_posts
INNER JOIN blog_categories 
ON blog_categories.id =blog_posts.catID";
    if(isset($id)){
	$id = (int)$id;
	$query .=" WHERE blog_posts.postID = {$id}";
    }
    if(isset($catID)){
	$catID = (int)$catID;
	$query .=" WHERE blog_posts.catID ={$catID}";
    }
    $query.=" ORDER BY blog_posts.postID DESC";
    
    $query = mysqli_query($connection,$query);
    while($row =mysqli_fetch_assoc($query)){
	$posts[] = $row;
    }
    return $posts;
}

function get_categories($connection,$id = null){
    $categories = array();
    $query = mysqli_query($connection,"SELECT name,id FROM blog_categories");
    while($row = mysqli_fetch_assoc($query)){
	$categories[] = $row;
    }
    return $categories;
}

function mysqli_result($res,$row=0,$col=0)
{ 
    if ($row >= 0 && mysqli_num_rows($res) > $row){ 
	    mysqli_data_seek($res,$row); 
	    $resrow = mysqli_fetch_row($res); 
	    if (isset($resrow[$col])){
		 return $resrow[$col]; 
	    }
    } 
	    return false; 
}
function category_exists($connection,$field,$value){
    $field =mysqli_real_escape_string($connection,$field);
    $value = mysqli_real_escape_string($connection,$value);
    
    $query = mysqli_query($connection,"SELECT COUNT({$field}) FROM blog_categories WHERE {$field} = '{$value}'");

    $row = $query->fetch_row();
    if($row[0] == 0){
	return false;
    }
    else{
    return true;
    }
}
function now(){
    $dt = new DateTime();
    return $dt->format('Y-m-d H:i:s');
}
?>
