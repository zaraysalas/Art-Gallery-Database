<?php
session_start();

error_reporting( error_reporting() & ~E_NOTICE );

      if(isset($_POST['newartist']))
      {
        $fname_artist = $_POST['fname_artist'];
        $lname_artist = $_POST['lname_artist'];
        $num_artist = $_POST['num_artist'];
        $st_artist = $_POST['st_artist'];
        $county_artist = $_POST['county_artist'];
        $country_artist = $_POST['country_artist'];
        $website_artist = $_POST['website_artist'];

        if($fname_artist=="" || $lname_artist == "" || $num_artist=="" || $st_artist=="" || $county_artist=="" || $country_artist=="" || $website_artist=="")
          {
            echo "<input class=\"message\" value=\"No empty fields\">"; 
          }
          else{
        include("conect_sql.php");

        $querynewuser = "SELECT * FROM artist_table WHERE FNAME_ARTIST = '$fname_artist' AND LNAME_ARTIST = '$lname_artist'";
        $checkingdouble = mysqli_query($conexion, $querynewuser);
        $duplicate = mysqli_num_rows($checkingdouble);

        if ($duplicate == 0) {
            $conexion->query("INSERT INTO artist_table(
              FNAME_ARTIST, LNAME_ARTIST, NUMADDRESS_ARTIST, ST_ARTIST, COUNTY_ARTIST, COUNTRY_ARTIST, WEBSITE_ARTIST)
              VALUES ('$fname_artist', '$lname_artist', '$num_artist', '$st_artist', '$county_artist', '$country_artist', '$website_artist')");
              
              echo "<input class=\"message\" value=\"Added successfully\">"; 
              include("close_sql.php");
        }
        else{
          echo "<input class=\"message\" value=\"Already exist\">"; 
        }
      }
      }
  ?>