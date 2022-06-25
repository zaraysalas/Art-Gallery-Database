<?php
    if(isset($_POST['showall_users'])){
        include("conect_sql.php");

        $info_to_search = $_POST['info_to_search1'];

        $query_search1 = mysqli_query($conexion,"SELECT * FROM customer_table");
        while ($query_search2 = mysqli_fetch_array($query_search1))
        {   
            echo"
                <tr>
                    <td class=\"cont-buttons-config\">
                        <a href=\"admin.php?u=".$query_search2['USERNAME']."\">
                        <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-config\"></i>
                        
                        <a href=\"admin_deleteuser.php?u=".$query_search2['USERNAME']."\">
                        <i class=\"fa fa-trash icons-config\"></i>
                    </td>
                    <td>".$query_search2['USERNAME']."</td>
                    <td>".$query_search2['PASSWORD_CUSTOMER']."</td>
                    <td>".$query_search2['TYPE_USER']."</td>
                    <td>".$query_search2['FNAME_CUSTOMER']."</td>
                    <td>".$query_search2['LNAME_CUSTOMER']."</td>
                    <td>".$query_search2['NUMADDRESS_CUSTOMER']."</td>
                    <td>".$query_search2['ST_CUSTOMER']."</td>
                    <td>".$query_search2['COUNTY_CUSTOMER']."</td>
                    <td>".$query_search2['COUNTRY_CUSTOMER']."</td>
                    <td>".$query_search2['EMAIL_CUSTOMER']."</td>
                    </tr>

            ";
        }
        include("close_sql.php");  
    }

    if(isset($_POST['searchbyuser'])){
        include("conect_sql.php");

        $info_to_search = $_POST['info_to_search1'];

        $query_search1 = mysqli_query($conexion,"SELECT * FROM customer_table
        WHERE USERNAME = '$info_to_search' OR
        PASSWORD_CUSTOMER = '$info_to_search' OR
        TYPE_USER = '$info_to_search' OR
        FNAME_CUSTOMER = '$info_to_search' OR
        LNAME_CUSTOMER = '$info_to_search' OR
        NUMADDRESS_CUSTOMER = '$info_to_search' OR
        ST_CUSTOMER = '$info_to_search' OR
        COUNTY_CUSTOMER = '$info_to_search' OR
        COUNTRY_CUSTOMER = '$info_to_search' OR
        EMAIL_CUSTOMER = '$info_to_search'");
        while ($query_search2 = mysqli_fetch_array($query_search1))
        {   
            echo"
                <tr>
                <td class=\"cont-buttons-config\">
                    <a href=\"admin.php?u=".$query_search2['USERNAME']."\">
                    <i style=\"margin-right: 5px;\" class=\"fa fa-pencil icons-config\"></i>
                    
                    <a href=\"admin_deleteuser.php?u=".$query_search2['USERNAME']."\">
                    <i class=\"fa fa-trash icons-config\"></i>
                </td>
                <td>".$query_search2['USERNAME']."</td>
                <td>".$query_search2['PASSWORD_CUSTOMER']."</td>
                <td>".$query_search2['TYPE_USER']."</td>
                <td>".$query_search2['FNAME_CUSTOMER']."</td>
                <td>".$query_search2['LNAME_CUSTOMER']."</td>
                <td>".$query_search2['NUMADDRESS_CUSTOMER']."</td>
                <td>".$query_search2['ST_CUSTOMER']."</td>
                <td>".$query_search2['COUNTY_CUSTOMER']."</td>
                <td>".$query_search2['COUNTRY_CUSTOMER']."</td>
                <td>".$query_search2['EMAIL_CUSTOMER']."</td>

                </tr>
                

            ";
        }
        include("close_sql.php");        
}


?>