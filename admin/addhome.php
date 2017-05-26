<a href="homes.php">List Homes</a>  

<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");

//$homes = getHomes();

$mysql = new Mysql();

if ($_POST['addKv'] && $_POST['ime']) {
    $sql = 'INSERT INTO `kvartali` (`id`, `ime`) VALUES (NULL, \'' . $_POST['ime'] . '\')';

    $mysql->connect(HOST, DATEBASE, USER, "");

    $res = $mysql->query($sql);
}
?>

<form action="" method="POST"  enctype="multipart/form-data">
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
<label> stai</label>
    <select name="stai">
        <?php getstai(); ?>
    </select>
    <br>
    <label> opisanie</label>
    <input type="text" name="opisanie">
    <br>

    <label> mestopolojenie</label>
    <select name="mestopolojenie">
        <?php getMs(); ?>
    </select>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
    <br>

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
    <input type="text" name="cena">
    <br>
    
   
    <label> valuta</label>
    <input type="checkbox" name="valuta" value="1"> 
    <br>
   
    <label> File </label>
    <input name="userFile" type="file" >
    <input type="submit" name="saveOffer" value="Save">
</form>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form action="index.php?module=addhome" method="post" >
                    <input type="text" name="ime"> 

                    </div>
                    <div class="modal-footer">
                        <input type="submit"  class="btn btn-primary" name="addKv">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Отказ</button>
                </form>
            </div>
        </div>

    </div>
</div>


<?php
print_r($_POST);
if ($_POST['saveOffer'] == "Save") {
    
    $uploadfile = UPLOAD . basename($_FILES['userFile']['name']);
    if(move_uploaded_file($_FILES['userFile']['tmp_name'], $uploadfile)) {
        
        echo "Uploaded ...";
    } else {
        echo "Error upload file";
        
    }
    print_r($_FILES);
    
    $sql = 'INSERT INTO `oferti` (`id`, `oferta`, `zaglavie`, `opisanie`, `mestopolojenie`, `kvadratura`, `stroitelstvo`, `etaj`, `asansior`, `obzavejdane`, `tec`, `garaj`, `prehod`, `cena`,`valuta`, `file`, `stai`) '
            . 'VALUES (NULL, \'' . $_POST['oferta'] . '\' , \'' . $_POST['zaglavie'] . '\' , \'' . $_POST['opisanie'] . '\' , \'' . $_POST['mestopolojenie'] . '\', \'' . $_POST['kvadratura'] . '\', \'' . $_POST['stroitelstvo'] . '\', \'' . $_POST['etaj'] . '\', \'' . $_POST['asansior'] . '\', \'' . $_POST['obzavejdane'] . '\', \'' . $_POST['tec'] . '\', \'' . $_POST['garaj'] . '\', \'' . $_POST['prehod'] . '\',\'' . $_POST['cena'] . '\',\'' . $_POST['valuta'] . '\', \'' .$_FILES['userFile']['name'] . '\', \'' . $_POST['stai'] . '\'  )';


    $mysql->connect(HOST, DATEBASE, USER, "");

    $res = $mysql->query($sql);
    if ($res != 0) {

        echo "Added...";
    }
}




    










  
    
    

   
   
   