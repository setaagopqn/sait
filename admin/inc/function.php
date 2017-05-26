<?php

require_once("conf.php");

function getHome($id = NULL) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    if ($id == NULL) {
        $query = "select * from oferti  ORDER BY `oferti`.`id` DESC";
    } else {
        $query = 'SELECT * FROM `oferti` WHERE `id` =' . $id;
    }

    $result = $mysql->query($query);
    $res = $mysql->fetchAll($result);
    return $res;
}

function getImeges($id = NULL) { // wzimane na kartinkite 
    if ($id != NULL) {

        $mysql = new Mysql();
        $mysql->connect(HOST, DATEBASE, USER, "");
        $query = 'SELECT * FROM `images` WHERE `oferti_id` =' . $id;
        $result = $mysql->query($query);
        $res = $mysql->fetchAll($result);
        return $res;
    }
}

function getKv($id = NULL) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    if ($id == NULL) {
        $query = "select * from kvartali";
    } else {
        $query = 'SELECT * FROM `kvartali` WHERE `id` =' . $id;
    }

    $result = $mysql->query($query);
    $res = $mysql->fetchAll($result);
    return $res;
}

function getOf() {
    global $of;
    foreach ($of as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>';
    }
}

function getZag() {
    global $zag;
    foreach ($zag as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>';
    }
}
function getstai() {
    global $zag;
    foreach ($zag as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>';
    }
}
function getMs() {
    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $sql = 'SELECT * FROM `kvartali`';

    $result = $mysql->query($sql);
    $res = $mysql->fetchAll($result);


    foreach ($res as $key => $value) {
        echo '<option value="' . $value['id'] . '">' . $value['ime'] . '</option>';
    }
}

function getSt() {
    global $st;
    foreach ($st as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>';
    }
}

function getdel($id = NULL) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    if ($id == NULL) {
        $query = "select * from user";
    } else {
        $query = 'SELECT * FROM `user` WHERE `id` =' . $id;
    }

    $result = $mysql->query($query);
    $res = $mysql->fetchAll($result);
    return $res;
}
