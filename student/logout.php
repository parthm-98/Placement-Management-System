<?php include "../db.php";
ob_start();
 ?>
<?php session_start(); ?>


<?php

	$_SESSION['sapid']=null;
	$_SESSION['name']=null;
	header("Location:./login.php");

?>
