Name:Gable Heng
Matric No.:A0121810Y

Basic use cases (functions mostly found in config/blog.php):
    Writers:
	Add post-inserts a row into blog_posts,the post must contain a title,content and a category.
	Delete post- deletes a row from blog_posts with the relevant postID,will fail if the postID is not found.
	Edit post-updates the row in blog_posts with the relevant postID,will fail if postID not found.
	Add Category-inserts a row into blog_categories,the category must contain a name.
	Delete Category-deletes a row from blog_categories with the relevant id,will fail if id not found.All posts within that category get reassigned to 'Uncategorized'.
	
    General:
	Get posts- gets post with relevant postID or catID,if either is null,will get everything.
	Get categories- gets all categories from blog_categories,returns an array of arrays with keys id and name.
	Login - checks if username exists in blog_members,if it does,then checks if given password is same as password found in the same row.md5 hash used.
	Register - requires a name,username,password,email.will insert it into blog_members as a new row.
	Admin check - checks if logged in user is an admin,does this by checking the permission the username has in blog_members.Admins have a permission of 1,non admins have their permission set to null.
	
To do list:
    
    make the web page look pretty.

Problems being faced:
    Getting all the css stuff to work together
    Using the css stuff
    directory structure	\
    			-->i think its supposed to look like this?
    database schema	/	
