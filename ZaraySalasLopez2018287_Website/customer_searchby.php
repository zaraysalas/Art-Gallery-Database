<?php
session_start();
if(isset($_POST['showall'])){
    include("conect_sql.php");

    $query_search1 = mysqli_query($conexion,"SELECT artist_table.ID_ARTIST, artist_table.FNAME_ARTIST,artist_table.LNAME_ARTIST,
    art_table.ID_ART, art_table.NAME_ART, art_table.TYPE_ART FROM artist_table
    INNER JOIN art_table
    ON artist_table.ID_ARTIST = art_table.ID_ARTIST");
    while ($query_search2 = mysqli_fetch_array($query_search1))
    {
        echo"
        <tr>
            <td>
                <a href=\"customer_favoritelist.php?artid=".$query_search2['ID_ART']."&username=".$_SESSION['username2']."\">
                <i style=\"margin-right: 5px;\" class=\"fa fa-thumbs-o-up icons-configwithblue\"></i>
            </td>
            <td>".$query_search2['ID_ART']."</td>
            <td>".$query_search2['NAME_ART']."</td>
            <td>".$query_search2['TYPE_ART']."</td>
            <td>".$query_search2['FNAME_ARTIST']."</td>
            <td>".$query_search2['LNAME_ARTIST']."</td>
        </tr>
        ";
    }
    include("close_sql.php");  
}

if(isset($_POST['searchby'])){
    include("conect_sql.php");
    
    $info_to_searchby = $_POST['info_to_searchby'];
    
    $query_search3 = mysqli_query($conexion,"SELECT artist_table.ID_ARTIST, artist_table.FNAME_ARTIST,artist_table.LNAME_ARTIST,
    art_table.ID_ART, art_table.NAME_ART, art_table.TYPE_ART FROM artist_table
    INNER JOIN art_table
    ON artist_table.ID_ARTIST = art_table.ID_ARTIST
    WHERE ID_ART ='$info_to_searchby' OR
    NAME_ART = '$info_to_searchby' OR
    FNAME_ARTIST = '$info_to_searchby' OR
    LNAME_ARTIST = '$info_to_searchbyartist'");
    
    while ($query_search4 = mysqli_fetch_array($query_search3))
    {   
        echo"
        <tr>
            <td>
            <a href=\"customer_favoritelist.php?artid=".$query_search4['ID_ART']."&username=".$_SESSION['username2']."\">
            <i style=\"margin-right: 5px;\" class=\"fa fa-thumbs-o-up icons-configwithblue\"></i>
            </td>
            <td>".$query_search4['ID_ART']."</td>
            <td>".$query_search4['NAME_ART']."</td>
            <td>".$query_search4['TYPE_ART']."</td>
            <td>".$query_search4['FNAME_ARTIST']."</td>
            <td>".$query_search4['LNAME_ARTIST']."</td>
        </tr>
        ";
    }
    include("close_sql.php");  
}
?>