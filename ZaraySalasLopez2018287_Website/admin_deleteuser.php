<?php

include("conect_sql.php");
$username_get = $_GET['u'];
$query_search1 = mysqli_query($conexion,"DELETE FROM customer_table
            WHERE USERNAME = '$username_get'");
include("close_sql.php");  
header('Location: admin.php?deleteuser=DELETED');

?>