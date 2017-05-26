<?php require_once("ErrorManager.class.php"); ?>
<?php require_once("Mysql.class.php"); ?>

<?php try { // <<<<-------------- try

	$mysql = new Mysql();
	$mysql->connect("localhost", "kashta", "root", ""); 
        $query = "select * from kashta"; 
	 $result = $mysql->query($query); 
	
      ?>
    <ul>
<?php
	$res = $mysql->fetchAll($result);
	
	 foreach ( $res as $k=>$kahti) 
            { 
            
?>
	<li><?php echo ($kahti['kvartal']); ?></li>
        <?php	
	 } ?>
	</ul>
	
 <h3>Everything's OK</h3>


<?php } catch (Exception $e) { // <<<<-------------- catch ?>

	<h3>There are errors!</h3>
	<ul>
	<?php foreach (ErrorManager::getInstance()->getErrors() as $error) { ?>

		<li><?php echo $error["message"]; ?></li>	

	<?php } ?>			
	</ul>
		

<?php }?> 
        
        
        
	
	
	
        


        
   
