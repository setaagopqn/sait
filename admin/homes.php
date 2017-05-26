<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");
$user = new user;
$homes = getHome();


if (isset($_GET['delete'])) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $sql = 'DELETE FROM `oferti` WHERE `id`=' . $_GET['delete'];
    $res = $mysql->query($sql);
    if ($res != 0) {
        echo "Deleted...";
    }
}
?> 




<?php echo "Hello " . $user->isloged(); ?>
<ul>

    <?php
    foreach ($homes as $k => $home) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <b>oferta:</b> <?php echo ($home['oferta']); ?>
                </div>
                <div class="col-md-4">
                    <b>zaglavie:</b>  <?php echo ($home['zaglavie']); ?>
                </div>
                <div class="col-md-4">
                    <b>opisanie:</b>  <?php echo ($home['opisanie']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>mestopolojenie:</b>  <?php echo ($home['mestopolojenie']); ?>
                </div>
                <div class="col-md-4">
                    <b>kvadratura:</b>   <?php echo ($home['kvadratura']); ?>
                </div>
                <div class="col-md-4">
                    <b>stroitelstvo:</b>  <?php echo ($home['stroitelstvo']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>etaj:</b>  <?php echo ($home['etaj']); ?>
                </div>

                <div class="col-md-4">
                    <b>asansior:</b>  
                    <?php
                    if ($home['asansior'] === '1') {
                        echo 'Да';
                    } else {
                        echo 'Нe';
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <b>obzavejdane: </b>  
                    <?php
                    if ($home['obzavejdane'] === '1') {

                        echo 'Да';
                    } else {
                        echo 'Нe';
                    }
                    ?>
                </div>     
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>tec:</b>
                    <?php
                    if ($home['tec'] === '1') {
                        echo 'Да';
                    } else {
                        echo 'Нe';
                    }
                    ?>
                </div>


                <div class="col-md-4"> 
                    <b> garaj:</b>  
                    <?php
                    if ($home['garaj'] === '1') {
                        echo 'Да';
                    } else {
                        echo 'Нe';
                    }
                    ?>
                </div>

                <div  class="col-md-4">
                    <b> prehod:</b> 
                    <?php
                    if ($home['prehod'] === '1') {
                        echo 'Да';
                    } else {
                        echo 'Нe';
                    }
                    ?>
                </div>  
            </div>

            <div class="row">
                <div class="col-md-4">
                    <b>cena:</b> <?php echo ($home['cena']); ?>
                </div>
                <div class="col-md-4">
                    <b> valuta:</b> 
                    <?php
                    if ($home['valuta'] === '1') {
                        echo 'EURO';
                    } else {
                        echo 'BG';
                    }
                    ?>

                </div></div></div>

        <div class="row">
            <div  class="col-md-12">
                <?php if ($home['file']): ?>
                    <img src="<?php echo UPLOAD . $home['file'] ?>" width="150">
                <?php endif; ?>
            </div>
            <?php
            $imeges = getImeges($home['id']);
            foreach ($imeges as $v => $image) {
                //   echo UPLOAD . $image['file'];
                ?>
                <img src="<?php echo UPLOAD . $image['file'] ?>" width="150">
            <?php } ?>

        </div>




        <a href="?module=edithome&id=<?php echo $home['id']; ?>" class="btn btn-success">Edit</a>


        <a href="?module=homes&delete=<?php echo $home['id']; ?>" class="btn btn-danger">Delete</a><br>
        <br>

    <?php } ?>

</ul>






