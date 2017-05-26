<a href="homes.php">List Homes</a>  

<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");

//$homes = getHomes();

$mysql = new Mysql();
?>

<form action="" method="POST">


    <label> zaglavie</label>
    <input type="text" name="zaglavie">
    <br>

    <label> opisanie</label>
    <input type="text" name="opisanie">
    <br>

    <label> kvartal</label>
    <select name="kvartal">
        <?php getKv(); ?>
    </select>
    <br>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <label> kvadratura</label>
    <input type="text" name="kvadratura">
    <br>

    <label> stroitelstvo</label>
    <select name="stroitelstvo">
        <?php getSt(); ?>
    </select>
    <br>

    <label> etaj</label>
    <input type="text" name="etaj">
    <br>

    <label> asansior</label>
    <input type="checkbox" name="asansior" value="1"> 
    <br>

    <label> obzavejdane</label>
    <input type="checkbox" name="obzavejdane" value="1"> 
    <br>

    <label> tec</label>
    <input type="checkbox" name="tec" value="1"> 
    <br>

    <label> garaj</label>
    <input type="checkbox" name="garaj" value="1"> 
    <br>  

    <label> prehod</label>
    <input type="checkbox" name="prehod" value="1"> 
    <br> 

    <label> cena</label>
    <input type="text" name="cena"><br>

    <input type="submit" name="saveOffer" value="Save">

</form>


<?php
print_r($_POST);
if ($_POST['saveOffer']== "Save") {
    $sql = 'INSERT INTO `oferti` (`id`, `zaglavie`, `opisanie`, `kvartal`, `kvadratura`, `stroitelstvo`, `etaj`, `asansior`, `obzavejdane`, `tec`, `garaj`, `prehod`, `cena`) '
            . 'VALUES (NULL,  , \'' . $_POST['zaglavie'] . '\' , \'' . $_POST['opisanie'] . '\' , \'' . $_POST['kvartal'] . '\', \'' . $_POST['kvadratura'] . '\', \'' . $_POST['stroitelstvo'] . '\', \'' . $_POST['etaj'] . '\', \'' . $_POST['asansior'] . '\', \'' . $_POST['obzavejdane'] . '\', \'' . $_POST['tec'] . '\', \'' . $_POST['garaj'] . '\', \'' . $_POST['prehod'] . '\',\'' . $_POST['cena'] . '\')';


    $mysql->connect(HOST, DATEBASE, USER, "");

    $res = $mysql->query($sql);
    if ($res != 0) {

        echo "Added...";
    }
}


if ($_POST['addKv'] ) {

    $sql = 'INSERT INTO `kvartali` (`id`, `ime`) VALUES (NULL, ' . $_POST['ime'] . ')';
    echo $sql;
    $mysql->connect(HOST, DATEBASE, USER, "");

    $res = $mysql->query($sql);
}
?>
    