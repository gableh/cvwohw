<?php

function add_post($title,$contents,$category){
}

function edit_post($id,$title,$content,$category){
}

function add_category($connection,$name){
    $name = mysqli_real_escape_string($connection,$name);
    mysqli_query($connection,"INSERT INTO blog_categories (name) VALUES('$name')");
}

function deleteStuff($field,$id){
}

function get_posts($id = null,$catID =null){
}

function get_categories($id = null){
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
function category_exists($connection,$name){
    $name =mysqli_real_escape_string($connection,$name);
    
    $query = mysqli_query($connection,"SELECT COUNT(1)) FROM 'blog_categories' WHERE 'name' = '{$name}'");
    return $query;
}
?>
