
<?php
require_once("./inc/conf.php");
require_once("./inc/function.php");
$user = new user;
$homes = getHome();
$userss = getUs() ;

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
    foreach ($userss as $k => $us) {
        ?>
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <b>username:</b> <?php echo ($us['username']); ?>
                </div>
                <div class="col-md-6">
                    <b>password:</b>  <?php echo ($us['password']); ?>
                </div>
              <div class="col-md-6">
                    <b>email:</b>  <?php echo ($us['email']); ?>
            </div>
        </div>    
        </div>

    <a href="userss.php.php?delete=<?php echo $us['id']; ?>" class="btn btn-danger">Delete</a><br>
        <br>

    <?php } ?>

</ul>






