<?php
error_reporting( error_reporting() & ~E_NOTICE );
if($_GET){
    $id_get = $_GET['u'];        
    include("conect_sql.php");
        $query_search5 = mysqli_query($conexion,"SELECT * FROM artist_table
            WHERE ID_ARTIST = '$id_get'");
        while ($query_search6 = mysqli_fetch_array($query_search5))
        {   
            echo"
                <tr>
                    <form method=\"post\" action=\"admin.php\">
                        <td><button name=\"update4\" class=\"btn buttons\" type=\"submit\">Update</button></td>
                        <td><input name=\"id_artist\" placeholder=\"ID_ARTIST\" class=\"form-control\" value=\"".$query_search6['ID_ARTIST']."\" readonly></td>
                        <td><input name=\"fname_artist\" placeholder=\"First Name\" class=\"form-control\" value=\"".$query_search6['FNAME_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"lname_artist\" placeholder=\"Last Name\" class=\"form-control\" value=\"".$query_search6['LNAME_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"numaddress_artist\" placeholder=\"Num\" class=\"form-control\" value=\"".$query_search6['NUMADDRESS_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"st_artist\" placeholder=\"Num\" class=\"form-control\" value=\"".$query_search6['ST_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"county_artist\" placeholder=\"County\" class=\"form-control\" value=\"".$query_search6['COUNTY_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"country_artist\" placeholder=\"Country\" class=\"form-control\" value=\"".$query_search6['COUNTRY_ARTIST']."\" required=\"\"></td>
                        <td><input name=\"website_artist\" placeholder=\"Website\" class=\"form-control\" value=\"".$query_search6['WEBSITE_ARTIST']."\" required=\"\"></td>
                    </form>
                </tr>
            ";
        }


    include("close_sql.php");
}
    $id_artist = $_POST['id_artist'];
    $fname_artist = $_POST['fname_artist'];
    $lname_artist = $_POST['lname_artist'];
    $numaddress_artist = $_POST['numaddress_artist'];
    $st_artist = $_POST['st_artist'];
    $county_artist = $_POST['county_artist'];
    $country_artist = $_POST['country_artist'];
    $website_artist = $_POST['website_artist'];

      if(isset($_POST['update4']))
      {
          if($fname_artist=="" || $lname_artist=="" || $numaddress_artist == "" || $st_artist=="" || $county_artist=="" || $country_artist=="" || $website_artist=="")
          {
            echo "<input class=\"message\" value=\"NO empty fields\">"; 
          }
          else 
          {
            include("conect_sql.php");

          $query_update3= "UPDATE artist_table
          SET FNAME_ARTIST='$fname_artist',
          LNAME_ARTIST='$lname_artist',
          NUMADDRESS_ARTIST='$numaddress_artist',
          ST_ARTIST='$st_artist',
          COUNTY_ARTIST='$county_artist',
          COUNTRY_ARTIST='$country_artist',
          WEBSITE_ARTIST='$website_artist'
          WHERE ID_ARTIST = '$id_artist'";

        mysqli_query($conexion,$query_update3);

        $query_search7 = mysqli_query($conexion,"SELECT * FROM artist_table
        WHERE ID_ARTIST = '$id_artist'");
        while ($query_search8 = mysqli_fetch_array($query_search7))
        {   
            echo"
                <tr>
                    <td></td>
                    <td>".$query_search8['ID_ARTIST']."</td>
                    <td>".$query_search8['FNAME_ARTIST']."</td>
                    <td>".$query_search8['LNAME_ARTIST']."</td>
                    <td>".$query_search8['NUMADDRESS_ARTIST']."</td>
                    <td>".$query_search8['ST_ARTIST']."</td>
                    <td>".$query_search8['COUNTY_ARTIST']."</td>
                    <td>".$query_search8['COUNTRY_ARTIST']."</td>
                    <td>".$query_search8['WEBSITE_ARTIST']."</td>

                </tr>
            ";
        }
        }
        include("close_sql.php");  
        echo "<input class=\"message\" value=\"Added successfully\">"; 
        header('Location: admin.php'); 
    }  
?>