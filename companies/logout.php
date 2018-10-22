<?php include "../db.php";
ob_start();
 ?>
<?php session_start(); ?>


<?php

	$_SESSION['sapid']=null;
	header("Location:./login.php");

?>
