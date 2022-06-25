<?php 
	$_SESSION['SUCCESSFUL']=0;
	//include("landing.php");
	$host = "database-1.cptrcvahtkfl.eu-west-1.rds.amazonaws.com";
	$database = "zaray_2018287";
	$databaseuser = "zaray_2018287";
	$databasepassword = "los3garcia";
	
	error_reporting(1);
	
	$conexion = new mysqli($host,$databaseuser,$databasepassword,$database);
    
	if ($conexion->connect_errno) {
		echo "SOMETHING FAIL AT conect_sql.php";
		exit();
	}

?>