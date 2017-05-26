<!DOCTYPE html>
<html lang="en">
    <?php
    require_once("./inc/conf.php");
    require_once("./inc/function.php");
//$user = new user;
    $homes = getHome();
//print_r($homes);
    ?>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>lora imoti</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/pgwslideshow.css" rel="stylesheet">
    <link href="css/pgwslideshow.min.css" rel="stylesheet">
    <link href="css/pgwslideshow_light.css" rel="stylesheet">
    <link href="css/pgwslideshow_light.min.css" rel="stylesheet">
    <link href="css/multi-select.css" rel="stylesheet">
    <link href="css/multi-select.dist.css" rel="stylesheet">
    <link href="css/multi-select.dev.css" rel="stylesheet">

    <link href="css/jquery.multiselect.css" rel="stylesheet" 
          type="text/css">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->





    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Lora imoti</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="team.html">Team</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="search.php">Search</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="naem.html">Naem</a>
                            </li>
                            <li>
                                <a href="prodava.html">Prodava</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Naem <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ednostaen.html">Ednostaen</a>
                            </li>
                            <li>
                                <a href="dvustaen.html">Dvustaen</a>
                            </li>
                            <li>
                                <a href="tristaen.html">Tristaen</a>
                            </li>
                            <li>
                                <a href="mnogostaen.html">Mnogostaen</a>
                            </li>
                            <li>
                                <a href="mezonet.html">Mezonet</a>
                            </li>
                            <li>
                                <a href="Ofis.html">Ofis</a>
                            </li>
                            <li>
                                <a href="magazin.html">Magazin</a>
                            </li>
                            <li>
                                <a href="zavedenie.html">Zavedenie</a>
                            </li>
                            <li>
                                <a href="kashta.html">Kashta</a>
                            </li>
                            <li>
                                <a href="sklad.html">Sklad</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prodava <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="1_Ednostaen.html">Ednostaen</a>
                            </li>
                            <li>
                                <a href="2_Dvustaen.html">Dvustaen</a>
                            </li>
                            <li>
                                <a href="3_Tristaen.html">Tristaen</a>
                            </li>
                            <li>
                                <a href="4_Mnogostaen.html">Mnogostaen</a>
                            </li>
                            <li>
                                <a href="5_Mezonet.html">Mezonet</a>
                            </li>
                            <li>
                                <a href="6_Ofis.html">Ofis</a>
                            </li>
                            <li>
                                <a href="7_Magazin.html">Magazin</a>
                            </li>
                            <li>
                                <a href="8_Zavedenie.html">Zavedenie</a>
                            </li>
                            <li>
                                <a href="9_Kashta.html">Kashta</a>
                            </li>
                            <li>
                                <a href="10_Sklad.html">Sklad</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" enctype="multipart/form-data" method ="post" >
                    <p style="text-indent"><br>
                        <label>
                            <input type="radio" name="tip" value="Наем" checked> Наем
                        </label>
                        <label>
                            <input type="radio" name="tip" value="Продава"> Продава
                        </label>
                    </p> </div></div>

        <div class="row">
            <div class="col-md-4">
                <p><b>Вид на имота</b></p>
                <?php getZagCeckBox(); ?>

                <!--<label> Едностаен</label>
                <input type="checkbox" name="Едностаен" value="1"> <br>
                <label> Двустаен</label>
                <input type="checkbox" name="Двустаен" value="1"> <br>
                <label> Тристаен</label>
                <input type="checkbox" name="Тристаен" value="1"> <br>
                <label> Многостаен</label>
                <input type="checkbox" name="Многостаен" value="1"> <br>
                <label> Мезонет</label>
                <input type="checkbox" name="Мезонет" value="1"> <br>
                <label> Kъща</label>
                <input type="checkbox" name="Kъща" value="1"> <br>-->
            </div>-->

            <!-- <div class="col-md-3">
             <label> Магазин</label>
             <input type="checkbox" name="Магазин" value="1"> <br>
             <label> Склад</label>
             <input type="checkbox" name="Склад" value="1"> <br>
             <label> Заведение</label>
             <input type="checkbox" name="Заведение" value="1"> <br>
             <label> Офис</label>
             <input type="checkbox" name="Офис" value="1"> <br>
             <label> Парцел</label>
             <input type="checkbox" name="Парцел" value="1"> <br>
             <label> Гараж</label>
             <input type="checkbox" name="Гараж" value="1"> <br>
         </div>-->


            <div class="row">
                <div class="col-md-4">
                    <p><b>Квадратура</b></p>
                    Oт <input type="text" name="ot"><br>
                    До <input type="text" name="do">

                    <p><b>Цена на имота</b></p>
                    От <input type="text" name="cenaOt"><br>
                    До <input type="text" name="cenaDo">

                    <label> EURO</label>
                    <input type="checkbox" name="EURO" value="1">

                    <label> BG</label>
                    <input type="checkbox" name="BG" value="0">
                    <br>
                    <p><b>Етаж</b></p>
                    Oт <input type="text" name="ot"><br>
                    До <input type="text" name="do">
                </div>


                <div  class="row">
                    <div class="col-md-4">              
                        <p>Местоположение на имота</p>
                        <select id='pre-selected-options' name="multi" multiple='multiple'>
                            <option value='elem_1'>мараша</option>
                            <option value='elem_2'>тракия</option>
                            <option value='elem_3'>кичука</option>
                            <option value='elem_4'>център</option>
                            <option value='elem_5'>кършака</option>
                            <option value='elem_6'>изгрев</option>
                          <option value='elem_100'>гагарин</option>
                    </select></div> 
                <input type="submit" name="go">
            </div></div></div></div>    



<?php if (isset($_POST['go'])): ?>
    <?php
    print_r($_POST);
    $rez = searchHome($_POST['ot'], $_POST['do'], $_POST['cenaOt'], $_POST['cenaDo'], $_POST['tip'], $_POST['zag_cb']);
    foreach ($rez as $k => $home) {
        ?>
        <?php
        if ((($k + 1) % 3) == 0) {
            echo '<div class="row">';
        }
        ?>



        <?php if ($home['file']): ?>
            <img class="img-responsive img-hover" src="<?php echo UPLOAD . $home['file'] ?>">
        <?php else: ?>
            <img class="img-responsive img-hover" src="img/noImg.jpg">
        <?php endif; ?>

        <h3>
            <a href="<?php echo ($home['id']); ?>"><?php echo ($home['zaglavie']); ?></a>
        </h3>

        <?php echo ($home['opisanie']); ?>


        <?php
        if ((($k + 1) % 3) == 0) {
            echo '</div>';
        }
        ?>
    <?php } ?>
<?php endif; ?>

<?php if (!isset($_POST['go'])): ?>
    <?php
    //$rez = searchHome($_POST['ot'], $_POST['do']);
    foreach ($homes as $k => $home) {
        ?>
        <?php
        if ((($k + 1) % 3) == 0) {
            echo '<div class="row">';
        }
        ?>


        <div class="col-md-4">
            <?php if ($home['file']): ?>
                <img class="img-responsive img-hover" src="<?php echo UPLOAD . $home['file'] ?>">
            <?php else: ?>
                <img class="img-responsive img-hover" src="img/noImg.jpg">
            <?php endif; ?>

            </a>
            <h3>
                <a href="<?php echo ($home['id']); ?>"><?php echo ($home['zaglavie']); ?></a>
            </h3>
            <?php echo ($home['opisanie']); ?>
        </div>

        <?php
        if ((($k + 1) % 3) == 0) {
            echo '</div>';
        }
        ?>
    <?php } ?>
<?php endif; ?>

<br>


<!-- star originalen kod -->
<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.multi-select.js"></script>

<script type="text/javascript">
    // run pre selected options
    $('#pre-selected-options').multiSelect();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/multiselect-checkbox/jquery.multiselect.js"></script>
<script>
                    $('select[multiple]').multiselect({
                        columns: 4,
                        placeholder: 'Select options'
                    });
</script>
</body>
</html>


</html>




