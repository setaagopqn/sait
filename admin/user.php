
<?php

require_once("./inc/conf.php");
require_once("./inc/function.php");


class user {
    public function login($user = null, $pass = null) {
        if ($user || $pass) {
            $mysql = new Mysql();
            $pass = md5($pass);
            $sql = "SELECT *  FROM `user` WHERE `username` LIKE '$user' AND `password` LIKE '$pass'";
            $res = $mysql->query($sql);
      
            if ($res != 0) {

                $_SESSION['user'] = $mysql->fetchAll($res);
                return 1;
            }
        }
        return 0;
        
    }

    public function logout() {

        session_destroy();
    }

    public function addUser($user = null, $pass = null) {
        if ($user || $pass) {
            $pass = md5($pass);
        }
    }

    public function isloged() {
        return $_SESSION['user'][0]['username'];
}}
