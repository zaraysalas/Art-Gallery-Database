<?php
if($_GET){
    $username_get = $_GET['u'];
    include("conect_sql.php");
        $query_search1 = mysqli_query($conexion,"SELECT * FROM customer_table
            WHERE USERNAME = '$username_get'");
        while ($query_search2 = mysqli_fetch_array($query_search1))
        {   
            echo"
                <tr>
                    <form method=\"post\" action=\"admin.php\">
                        <td><button name=\"update3\" class=\"btn buttons\" type=\"submit\">Update</button></td>
                        <td><input name=\"username3\" placeholder=\"Username\" class=\"form-control\" value=\"".$query_search2['USERNAME']."\" readonly></td>
                        <td><input name=\"password3\" placeholder=\"Password\" class=\"form-control\" value=\"".$query_search2['PASSWORD_CUSTOMER']."\" required=\"\"></td>
                        <td><select class=\"form-control\" name=\"type3\" required=\"\">
                                <option>".$query_search2['TYPE_USER']."</option>
                                <option value=\"CUSTOMER\">CUSTOMER</option>
                                <option value=\"ADMINISTRATOR\">ADMINISTRATOR</option>
                        </select></td>
                        <td><input name=\"fname3\" placeholder=\"First Name\" class=\"form-control\" value=\"".$query_search2['FNAME_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"lname3\" placeholder=\"Last Name\" class=\"form-control\" value=\"".$query_search2['LNAME_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"num3\" placeholder=\"Num\" class=\"form-control\" value=\"".$query_search2['NUMADDRESS_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"st3\" placeholder=\"Street\" class=\"form-control\" value=\"".$query_search2['ST_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"county3\" placeholder=\"Country\" class=\"form-control\" value=\"".$query_search2['COUNTY_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"country3\" placeholder=\"Country\" class=\"form-control\" value=\"".$query_search2['COUNTRY_CUSTOMER']."\" required=\"\"></td>
                        <td><input name=\"email3\" placeholder=\"Password\" class=\"form-control\" value=\"".$query_search2['EMAIL_CUSTOMER']."\" required=\"\"></td>
                    </form>
                </tr>
            ";
        }


    include("close_sql.php");
}
    $username3 = $_POST['username3'];
    $fname3 = $_POST['fname3'];
    $lname3 = $_POST['lname3'];
    $num3 = $_POST['num3'];
    $st3 = $_POST['st3'];
    $county3 = $_POST['county3'];
    $country3 = $_POST['country3'];
    $email3 = $_POST['email3'];
    $password3 = $_POST['password3'];
    $type3 = $_POST['type3'];

      if(isset($_POST['update3']))
      {
          if($fname3=="" || $lname3 == "" || $num3=="" || $st3=="" || $county3=="" || $country3=="" || $email3=="" || $password3=="")
          {
            echo "<input class=\"message\" value=\"NO empty fields\">"; 
          }
          else 
          {
            include("conect_sql.php");
          $query_update2 = "UPDATE customer_table
          SET PASSWORD_CUSTOMER='$password3',
          FNAME_CUSTOMER='$fname3',
          LNAME_CUSTOMER='$lname3',
          NUMADDRESS_CUSTOMER='$num3',
          ST_CUSTOMER='$st3',
          COUNTY_CUSTOMER='$county3',
          COUNTRY_CUSTOMER='$country3',
          EMAIL_CUSTOMER='$email3'
          WHERE USERNAME = '$username3'";

        mysqli_query($conexion,$query_update2);

        $query_search3 = mysqli_query($conexion,"SELECT * FROM customer_table
        WHERE USERNAME = '$username3'");
        while ($query_search4 = mysqli_fetch_array($query_search3))
        {   
            echo"
                <tr>
                    <td></td>
                    <td>".$query_search4['USERNAME']."</td>
                    <td>".$query_search4['PASSWORD_CUSTOMER']."</td>
                    <td>".$query_search4['TYPE_USER']."</td>
                    <td>".$query_search4['FNAME_CUSTOMER']."</td>
                    <td>".$query_search4['LNAME_CUSTOMER']."</td>
                    <td>".$query_search4['NUMADDRESS_CUSTOMER']."</td>
                    <td>".$query_search4['ST_CUSTOMER']."</td>
                    <td>".$query_search4['COUNTY_CUSTOMER']."</td>
                    <td>".$query_search4['COUNTRY_CUSTOMER']."</td>
                    <td>".$query_search4['EMAIL_CUSTOMER']."</td>

                </tr>
            ";
        }
        }
        include("close_sql.php");  
        echo "<input class=\"message\" value=\"Edited successfully\">"; 
          }
        header('Location: admin.php');   
?>