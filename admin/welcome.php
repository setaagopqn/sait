<?php
session_start();
if(!$_SESSION["login_user"])
{
    header("location:index.php?notlogedin=You are not Administrator!");
}
else{
   echo"<h3>Welcome :".$_SESSION['login_user']."</h3>";
echo "<a href='logout.php'>Logout</a>"; 
}


