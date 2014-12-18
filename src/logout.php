<?php
 session_start();
if(isset($_SESSION['username']))
{
    session_destroy();
    echo "Youve been logged out!<a href='index.php'>Click here</a> to return.";
}
else
{
    die("Please login first!");
}
?>
