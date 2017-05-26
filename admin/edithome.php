<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");

$mysql = new Mysql();
?>

<?php If ($_GET && $_GET['id']): ?>

    <?php
    $home = getHome( $_GET['id']);
//print_r($home);
    ?>

<form action="" name="offer" method="POST">
        <input type="hidden" name="id" value="<?php echo $home[0]['id'] ?>">
       <label> oferta</label>
        <select name="oferta">
            <?php getOf(); ?>
        </select>
        <br>

       <label> zaglavie</label>
        <select name="zaglavie">
            <?php getZag(); ?>
        </select>
        <br>

        <label> opisanie</label>
        <input type="text" name="opisanie"><br>

        <label> mestopolojenie</label>
        <select name="mestopolojenie">
            <?php getMs(); ?>
        </select>
        <br>

        <label> kvadratura</label>
        <input type="text" name="kvadratura" value="<?php echo $home[0]['kvadratura'] ?>"><br>

        <label> stroitelstvo</label>
        <select name="stroitelstvo">
            <?php getSt(); ?>
        </select>
        <br>


        <label> etaj</label>
        <input type="text" name="etaj"><br>

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

        <input type="submit" value="Save">

    </form>
<form action="" name="file" method="POST" enctype="multipart/form-data">
    <label> File </label>
     <input type="hidden" name="id" value="<?php echo $home[0]['id'] ?>">
    <input name="userFile" type="file" >
    <input type="submit" name="saveFile" value="Save File">
</form>
<?php else: ?>

    <h2>NQma ID za redaktirane</h2>
<?php endif; ?> 

<?php
print_r($_POST);
if ($_POST && $_POST['id'] && !$_POST['saveFile']) {
    $sql = 'UPDATE `oferti` SET `ogerta` = \'' . $_POST['oferta'] . '\', `zaglavie` = \'' . $_POST['zaglavie'] . '\', `opisanie` = \'' . $_POST['opisanie'] . '\', `mestopolojenie` = \'' . $_POST['mestopolojenie'] . '\', `kvadratura` = \'' . $_POST['kvadratura'] . '\', `etaj` = \'2\' '
            . 'WHERE `oferti`.`id` =' . $_POST['id'];
    $mysql->connect(HOST, DATEBASE, USER, "");
    $res = $mysql->query($sql);
    if ($res != 0) {
        unset($home);
        echo "SAved...";
    }
    
    
    
}


if ( $_POST['saveFile']) {
    //kachvane na faila
     $uploadfile = UPLOAD . basename($_FILES['userFile']['name']);
    if(move_uploaded_file($_FILES['userFile']['tmp_name'], $uploadfile)) {
        
        echo "Uploaded ...";
    } else {
        echo "Error upload file";
        
    }
    //zapis v bazata
    $sql  = 'INSERT INTO `images` (`id`, `file`, `oferti_id`) '
            . 'VALUES (NULL, \''. $_FILES['userFile']['name'] .'\', \'' .$_POST['id']. '\')';
    $mysql->connect(HOST, DATEBASE, USER, "");
    $res = $mysql->query($sql);
    print_r($_FILES);
}



