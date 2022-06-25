<?php
error_reporting( error_reporting() & ~E_NOTICE );
$id_get = $_GET['artid'];
$username_get = $_GET['username'];

$out_id_get = $_GET['outid'];
$out_username_get = $_GET['outusername'];

if(isset($id_get)&&isset($username_get)){
    include("conect_sql.php");

    $query_newfav = "SELECT * FROM favorite_list_table
    WHERE USERNAME = '$username_get' AND ID_ART = '$id_get'";
    $checkingdouble = mysqli_query($conexion, $query_newfav);
    $duplicate = mysqli_num_rows($checkingdouble);

    if ($duplicate == 0) {
        $conexion->query("INSERT INTO favorite_list_table 
        (USERNAME, ID_ART)
        VALUES('$username_get','$id_get')");
        header('Location: customer.php?added_to_fav=added_to_fav');
        echo "<input class=\"message\" value=\"Added successfully\">"; 
        include("close_sql.php");
    }
    else{
        header('Location: customer.php?added_to_fav=already_exist');
        echo "<input class=\"message\" value=\"Already exist\">"; 
    }
    }

    if(isset($out_id_get)&&isset($out_username_get)){
include("conect_sql.php");
$query_newfav2 = "SELECT * FROM favorite_list_table
    WHERE USERNAME = '$out_username_get' AND ID_ART = '$out_id_get'";
    $checkingdouble = mysqli_query($conexion, $query_newfav2);
    $duplicate = mysqli_num_rows($checkingdouble);

    if ($duplicate > 0) {
$query_search1 = mysqli_query($conexion,"DELETE FROM favorite_list_table
            WHERE USERNAME = '$out_username_get' AND ID_ART = '$out_id_get'");

header('Location: customer.php?added_to_fav=deleted_from_fav');
echo "<input class=\"message\" value=\"Deleted\">"; 
    }else{
        header('Location: customer.php?added_to_fav=not_in_your_list');
        echo "<input class=\"message\" value=\"Not in your list\">"; 
    }
    include("close_sql.php");  
}
?>