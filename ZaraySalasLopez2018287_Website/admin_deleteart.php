<?php
include("conect_sql.php");
$id_get = $_GET['artid'];
$query_search1 = mysqli_query($conexion,"DELETE FROM art_table
            WHERE ID_ART = '$id_get'");
include("close_sql.php");  
header('Location: admin.php?deleteart=DELETED');
?>