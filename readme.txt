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
    add pagination
    remove the login page and either put the loginbox in the side bar or use a js prompt.
    make the web page look pretty.

Problems faced:
    Getting all the css stuff to work together
    directory structure	\
    			-->i think its supposed to look like this?
    database schema	/	
    removing the empty space at the bottom of the footer.
    
User manual:
	Regular users can make their accounts using the signup page provided,however,admin permissions must be manually
	given in the database.This is to increase security since for a small blog,admin permissions dont really have to be given out
	so regularly.All non-admins have their permissions set to NULL while admins have their permissions set to 1.
	if using the database provided,the admin has username: admin and password:123456.Some functionality requires the logged
	in user to be an admin,although there is no added functionality for signing up as a member.
	
What i feel i accomplished from this assignment:
	I feel like i have gotten a basic idea of whats going on for both the frontend and backend of web development after 
	doing this assignment,using php,css,js and html to make a webpage look the way it is was quite an interesting experience
	since before that i had never used more than one language in the same document.I also never realized until after i started
	doing this that so many things take place behind the scenes even when doing deceptively simple things like registering or 
	deciding what to display to the user and even adding/editing posts.This was really quite a change from the webpage i created using
	dreamweaver in sec 2.
	
	Getting everything to work together i feel was also quite an accomplishment,starting with the lamp stack which took me quite awhile
	to figure out how to set up and debug and get them all to work with each other.The mysql database is particular was quite annoying to
	set up because there was some problem with setting up the pma table or something.Which i think might have been solved with sudo?
	Cant really remember,seems too fustrating to have been solved with just sudo though.I was so happy when i saw the phpMyAdmin page load.
	Then another problem was trying to figure out how to use mysqli since mysql was deprecated and more importantly so was
	mysql_result which every tutorial/stackoverflow answer was telling me to use.Then trying to get all the css to work with each other was
	quite a nightmare since they wouldnt play nice and would go all over the place,especially since i was trying to get them all to work for
	both mobile and desktop,which admittedly was quite adventurous since at that time i didnt even know how to use basic css or basic anything
	for that matter,thank goodness for templates and the ability to google everything.Unfortunately,i havent been able to debug everything and the extra white space at the bottom of the page
	continues to annoy me to this day.
	
	Overall it was quite fun ,i learnt a lot from it and it made my holidays quite productive.10/10 would do again.
	
	
	
	
	
	
