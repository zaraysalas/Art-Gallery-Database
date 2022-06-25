<?php
    if(isset($_POST['showall_art'])){
        include("conect_sql.php");

        $query_search1 = mysqli_query($conexion,"SELECT * FROM art_table");
        while ($query_search2 = mysqli_fetch_array($query_search1))
        {   
            echo"
            <tr>
                <td>
                    <a href=\"admin.php?artid=".$query_search2['ID_ART']."\">
                    <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-config\"></i>
                    
                    <a href=\"admin_deleteart.php?artid=".$query_search2['ID_ART']."\">
                    <i class=\"fa fa-trash icons-config\"></i>
                </td>
                <td>".$query_search2['ID_ART']."</td>
                <td>".$query_search2['NAME_ART']."</td>
                <td>".$query_search2['TYPE_ART']."</td>
                <td>".$query_search2['ID_ARTIST']."</td>
                </tr>
        ";
        }
        include("close_sql.php");  
    }

    if(isset($_POST['searchbyart'])){
        include("conect_sql.php");

        $info_to_search = $_POST['info_to_search3'];

        $query_search1 = mysqli_query($conexion,"SELECT * FROM art_table
        WHERE ID_ART = '$info_to_search' OR
        NAME_ART = '$info_to_search' OR
        TYPE_ART = '$info_to_search' OR
        ID_ARTIST = '$info_to_search'");
        while ($query_search2 = mysqli_fetch_array($query_search1))
        {   
            echo"
                <tr>
                    <td>
                        <a href=\"admin.php?artid=".$query_search2['ID_ART']."\">
                        <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-config\"></i>
                        
                        <a href=\"admin_deleteart.php?artid=".$query_search2['ID_ART']."\">
                        <i class=\"fa fa-trash icons-config\"></i>
                    </td>
                    <td>".$query_search2['ID_ART']."</td>
                    <td>".$query_search2['NAME_ART']."</td>
                    <td>".$query_search2['TYPE_ART']."</td>
                    <td>".$query_search2['ID_ARTIST']."</td>
                </tr>

            ";
        }
        include("close_sql.php");  
    }
?>