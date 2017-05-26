<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");

if (isset($_POST["sub"])) 
    {
    $username = $_POST["thtuser"];
    $password = $_POST["thtpass"];
    $lUser = 0;
    if ($password && $username) {
        $user = new user;
         $user->login($username, $password);
        if ($user->isloged()) {
            
            header ("location: index.php");
        }
    }
    
    
    }


?>


<form action="" method="POST">
            <table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
                <tr>
                    <th colspan="6" align="center" style="background: indigo;color:white "><h1>Segure Admin Login</h1>
                </tr>
                <tr>
                    <th align="right">Username</th>
                    <td><input type="text" name="thtuser"></td>
                </tr>
                <tr>
                    <th align="right">Password</th>
                    <td><input type="password" name="thtpass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="centaer">
                        <?php  $user = new user;if (!$user->isloged()) { echo "Грешно потребителско име или парола";} ?>
                        <input type="submit" value="Log in" id="sub" name="sub">
                    </td>
                </tr>
            </table>
        </form>
            
            <?php

/*
include './db.php';
if (isset($_POST["sub"])) 
    {
    $username = $_POST["thtuser"];
    $password = $_POST["thtpass"];

    $query = "select * from login where username='$username' and password= '$password'";
    $exe_query = mysqli_query($conn, $query);
    $found_num_rows = mysqli_num_rows($exe_query);

    if ($found_num_rows == 1) {
        
        echo 'Welcome! You are login successful!!!';;
    
    } 
    else {
        echo 'Your username or password are inccorect!!!';
    }
}

*/