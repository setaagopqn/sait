<!DOCTYPE html>
<html>
    <head>
        <style>p.double {border-style: double; border-color:#505e51;}
        </style>
    </head>
    <body>
        <?php
        require_once("./inc/conf.php");
        require_once("./inc/function.php");

//$homes = getHomes();

        $mysql = new Mysql();
        ?>

        <form action="" method="POST">
            <p class="double">
                <label> username</label>
                <input type="text" name="username">
                <br>

                <label> password</label>
                <input type="text" name="password">
                <br>

                <input type="submit" name="saveUser" value="Save">
            </p>
        </form>

        <?php
        print_r($_POST);
        if ($_POST['saveUser'] == "Save") {
            $sql = 'INSERT INTO `user` (`id`, `username`, `password`) '
                    . 'VALUES (NULL, \'' . $_POST['username'] . '\' , \'' . $_POST['password'] . '\')';


            $mysql->connect(HOST, DATEBASE, USER, "");

            $res = $mysql->query($sql);
            if ($res != 0) {

                echo "Add...!";
            }
        }




    










  
    
    

   
   
   