<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");
$user = new user;
$kvs = getKv();
$deletes = getdel();
if ($_GET && $_GET['delete']) {

    $mysql = new Mysql();
    $mysql->connect(HOST, DATEBASE, USER, "");
    $sql = 'DELETE FROM `user` WHERE `user`.`id` =' . $_GET['delete'];

    $res = $mysql->query($sql);
    if ($res != 0) {

        echo "Deleted...";
    }
}
?>

<?php echo "Hello " . $user->isloged(); ?>
<ul>

    <?php
    foreach ($deletes as $k => $del) {
        ?>
        username:  <?php echo ($del['username']); ?>
        <br>
        password:  <?php echo ($del['password']); ?>
        <br>
       
        <a href="deluser.php?delete=<?php echo $del['id']; ?>">Delete</a><br>


    <?php } ?>

</ul>        









