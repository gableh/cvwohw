<?php include_once('header.php') ?>
<?php include_once('config/init.php')?>
<?php
echo "<h1>Register</h1>";?>


<form action='checkregister.php' method='POST'>
    <table>
	<tr>
	    <td>
		Name:
	    </td>
	    <td>
		<input type='text' name='name' value='<?php if(isset($_POST['name'])){echo $_POST['name'];}?>'>
	    </td>
	</tr>

	<tr>
	    <td>
		Username:
	    </td>
	    <td>
		<input type='text' name='username' value='<?php if(isset($_POST['username'])){echo $_POST['username'];}?>'>
	    </td>
	</tr>

	<tr>
	    <td>
		Password:
	    </td>
	    <td>
		<input type='password' name='password'>
	    </td>
	</tr>
	<tr>
	    <td>
		Repeat Password:
	    </td>
	    <td>
		<input type='password' name='password2'>
	    </td>
	</tr>

	<tr>
	    <td>
		Email:
	    </td>
	    <td>
		<input type='text' name='email' value ='<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>'>
	    </td>
	</tr>
    </table>
    <p>
    <input type ='submit' name= 'submit' value='Register'>
    </p>
</form>
<?php include_once('footer.php')?>
