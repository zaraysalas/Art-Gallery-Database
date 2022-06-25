<?php
if(isset($_POST['showall_artist'])){
    include("conect_sql.php");

    $query_search1 = mysqli_query($conexion,"SELECT * FROM artist_table");
    while ($query_search2 = mysqli_fetch_array($query_search1))
    {   
        echo"
        <tr>
        <td>
            <a href=\"admin.php?u=".$query_search2['ID_ARTIST']."\">
            <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-configwithblue\"></i>
            
            <a href=\"admin_deleteartist.php?u=".$query_search2['ID_ARTIST']."\">
            <i class=\"fa fa-trash icons-configwithblue\"></i>
        </td>
        <td>".$query_search2['ID_ARTIST']."</td>
        <td>".$query_search2['FNAME_ARTIST']."</td>
        <td>".$query_search2['LNAME_ARTIST']."</td>
        <td>".$query_search2['NUMADDRESS_ARTIST']."</td>
        <td>".$query_search2['ST_ARTIST']."</td>
        <td>".$query_search2['COUNTY_ARTIST']."</td>
        <td>".$query_search2['COUNTRY_ARTIST']."</td>
        <td>".$query_search2['WEBSITE_ARTIST']."</td>
    </tr>
        ";
    }
    include("close_sql.php");  
}

if(isset($_POST['searchbyartist'])){
include("conect_sql.php");

$info_to_searchbyartist = $_POST['info_to_searchbyartist'];

$query_search1 = mysqli_query($conexion,"SELECT * FROM artist_table
WHERE ID_ARTIST = '$info_to_searchbyartist' OR
FNAME_ARTIST = '$info_to_searchbyartist' OR
LNAME_ARTIST = '$info_to_searchbyartist' OR
NUMADDRESS_ARTIST = '$info_to_searchbyartist' OR
ST_ARTIST = '$info_to_searchbyartist' OR
COUNTY_ARTIST = '$info_to_searchbyartist' OR
COUNTRY_ARTIST = '$info_to_searchbyartist' OR
WEBSITE_ARTIST = '$info_to_searchbyartist'");

while ($query_search2 = mysqli_fetch_array($query_search1))
{   
    echo"
        <tr>
            <td>             
                <a href=\"admin.php?u=".$query_search2['ID_ARTIST']."\">
                <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-configwithblue\"></i>
                
                <a href=\"admin_deleteartist.php?u=".$query_search2['ID_ARTIST']."\">
                <i class=\"fa fa-trash icons-configwithblue\"></i>
            </td>
            <td>".$query_search2['ID_ARTIST']."</td>
            <td>".$query_search2['FNAME_ARTIST']."</td>
            <td>".$query_search2['LNAME_ARTIST']."</td>
            <td>".$query_search2['NUMADDRESS_ARTIST']."</td>
            <td>".$query_search2['ST_ARTIST']."</td>
            <td>".$query_search2['COUNTY_ARTIST']."</td>
            <td>".$query_search2['COUNTRY_ARTIST']."</td>
            <td>".$query_search2['WEBSITE_ARTIST']."</td>
        </tr>
        

    ";
}
include("close_sql.php");  
}
?>