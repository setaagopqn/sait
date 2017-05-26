<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");
$user = new user;
$kvs = getKv();

if ($_GET && $_GET['delete']) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $sql = 'DELETE FROM `kvartali` WHERE `kvartali`.`id` =' . $_GET['delete'];

    $res = $mysql->query($sql);
    if ($res != 0) {

        echo "Deleted...";
    }
}

?>

<?php echo "Hello " . $user->isloged(); ?>
<ul>

    <?php
    foreach ($kvs as $k => $kv) {
        ?>
        oferta:  <?php echo ($kv['id']); ?>
        <br>
        zaglavie:  <?php echo ($kv['ime']); ?>
        <br>
       

        <a href="edithome.php?id=<?php echo $kv['id']; ?>">Edit</a> 

        <a href="kvartali.php?delete=<?php echo $kv['id']; ?>">Delete</a><br>


    <?php } ?>

</ul>






