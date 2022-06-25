<?php
include("conect_sql.php");
$id_get = $_GET['u'];
$query_search1 = mysqli_query($conexion,"DELETE FROM artist_table
            WHERE ID_ARTIST = '$id_get'");
include("close_sql.php");  
header('Location: admin.php?deleteartist=DELETED');
?>