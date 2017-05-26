<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");

$mysql = new Mysql();
?>

<?php If ($_GET && $_GET['id']): ?>

    <?php
    $home = getHome();
//print_r($home);
    ?>

   <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $home[0]['id'] ?>">
        
        <label> zaglavie</label>
        <input type="text" name="zaglavie" value="<?php echo $home[0]['zaglavie'] ?>"><br>

        <label> opisanie</label>
        <input type="text" name="opisanie"><br>

        <label> kvartal</label>
        <select name="kvartal">
            <?php getKv(); ?>
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

        <input type="submit" name="saveOffer" value="Save">

    </form>

<form action="" method="POST"  enctype="multipart/form-data">
    <label> File </label>
    <input name="userFile" type="file" >
    <input type="submit" name="saveFile" value="Save File">
</form>
<?php else: ?>

    <h2>NQma ID za redaktirane</h2>
<?php endif; ?> 

<?php
print_r($_POST);
if ($_POST && $_POST['id']  && $_POST['saveOffer']) {
    $sql = 'UPDATE `oferti` SET `zaglavie` = \'' . $_POST['zaglavie'] . '\', `opisanie` = \'' . $_POST['opisanie'] . '\', `kvartal` = \'' . $_POST['kvartal'] . '\', `kvadratura` = \'' . $_POST['kvadratura'] . '\', `etaj` = \'2\' '
            . 'WHERE `oferti`.`id` =' . $_POST['id'];
    $mysql->connect(HOST, DATEBASE, USER, "");
    $res = $mysql->query($sql);
    if ($res != 0) {
        unset($home);
        echo "SAved...";
    }
}



if ($_POST && $_POST['id'] && $_POST['saveFile']) {
    
     $uploadfile = UPLOAD . basename($_FILES['userFile']['name']);
    if(move_uploaded_file($_FILES['userFile']['tmp_name'], $uploadfile)) {
        
        echo "Uploaded ...";
    } else {
        echo "Error upload file";
        
    }
    print_r($_FILES);
}