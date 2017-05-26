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

function searchHome($ot = 0, $do = NULL, $cenaOt = NULL, $cenaDo = NULL, $tip = NULL, $zag_cb = array(), $zaglavie_cb = array()) {
    print_r($zag_cb);
    $sql  = 'SELECT *  FROM `oferti` WHERE `kvadratura` >= 6 and `kvadratura` <= 400 and `cena` > 5 and `cena` < 90000 ORDER BY `id`  ASC';
    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $query = 'SELECT *  FROM `oferti` WHERE ';
   
    if ($ot) {
        $query .= '`kvadratura` >= '.$ot.' and ';
    }
    if ($do) {
        $query .= '`kvadratura` <= '.$do.' and ';
    }
    
    /*if ($ot != NULL and $do != NULL and $cenaOt == NULL and $cenaDo == NULL) {
        $query .=  ' `kvadratura` BETWEEN ' . $ot . ' AND ' . $do;
    }

    if ($ot != NULL and $do != NULL and $cenaOt != NULL and $cenaDo != NULL) {
        $query .= ' `kvadratura` BETWEEN ' . $ot . ' AND ' . $do . ' AND `cena` BETWEEN ' . $cenaOt . ' AND ' . $cenaDo;
    }
     * 
     */
    if ($tip != NULL) {
        if ($tip == "Наем") {
            $query = $query . ' `oferta` LIKE \'Наем\' ';
        }
        if ($tip == "Продава") {
            $query = $query . ' `oferta` LIKE \'Продава\' ';
        }
    }
if(sizeof($zag_cb)>0) {
    $si = sizeof($zag_cb)-1;
        foreach ($zag_cb as $key => $value) {
            if($key==0){ $query .= ' and ';}
            
            if ($key == $si){
             
              $query .= ' `zaglavie` LIKE \''.$value.'\' ';
            } else {
               $query .= ' `zaglavie` LIKE \''.$value.'\' or ';
            }
        }
        
    }
    $query = $query . ' ORDER BY `id`  DESC';
    
echo '<pre>'. $query .'</pre>';
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
function getZagCeckBox() {
    global $zag;
    foreach ($zag as $key => $value) {
        
        echo '<label>' .$value.'</label><input type="checkbox" name="zag_cb[]" value="' . $value . '"><br />';
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
