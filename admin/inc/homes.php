<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");
$user = new user;
$homes= getHome();

if ($_GET && $_GET['delete']) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $sql = 'DELETE FROM `oferti` WHERE `kashta`.`id` =' . $_GET['delete'];
    
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
        oferta:  <?php echo ($home['oferta']); ?>
        <br>
        zaglavie:  <?php echo ($home['zaglavie']); ?>
        <br>
        opisanie:  <?php echo ($home['opisanie']); ?>
        <br>
        kvartal:  <?php echo ($home['kvartal']); ?>
        <br>
        kvadratura:   <?php echo ($home['kvadratura']); ?>
        <br>
        stroitelstvo:  <?php echo ($home['stroitelstvo']); ?>
        <br>
        etaj:  <?php echo ($home['etaj']); ?>
        <br>
        asansior:  <?php echo ($home['asansior']); ?>
        <br>
        obzavejdane:   <?php echo ($home['obzavejdane']); ?>
        <br>
        tec:  <?php echo ($home['tec']); ?>
        <br>
        garaj:  <?php echo ($home['garaj']); ?>
        <br>
        prehod:  <?php echo ($home['prehod']); ?>
        <br>
        cena:  <?php echo ($home['cena']); ?>
        <br>

       
     
        <a href="edithome.php?id=<?php echo $home['id']; ?>">Edit</a> 

        <a href="homes.php?delete=<?php echo $home['id']; ?>">Delete</a>


    <?php } ?>

</ul>



