<?php
session_start();

if(isset($_POST['showfav'])){
    include("conect_sql.php");
    $username = $_SESSION['username2'];

    $query_search10 = mysqli_query($conexion,"SELECT favorite_list_table.USERNAME, favorite_list_table.ID_ART, art_table.NAME_ART, art_table.TYPE_ART 
    FROM favorite_list_table
    INNER JOIN art_table
    ON favorite_list_table.ID_ART = art_table.ID_ART
    WHERE USERNAME = '$username'");

    while ($query_search20 = mysqli_fetch_array($query_search10))
    {
        echo"
        <tr>
            <td>
                <a href=\"customer_favoritelist.php?outid=".$query_search20['ID_ART']."&outusername=".$_SESSION['username2']."\">
                <i class=\"fa fa-thumbs-o-down icons-configwithblue\"></i>
            </td>
            <td>".$query_search20['ID_ART']."</td>
            <td>".$query_search20['NAME_ART']."</td>
            <td>".$query_search20['TYPE_ART']."</td>
        </tr>
        ";
    }
    include("close_sql.php");  
}
?>