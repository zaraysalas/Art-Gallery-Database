<?php
session_start();

error_reporting( error_reporting() & ~E_NOTICE );

      if(isset($_POST['newart']))
      {
        $name_art = $_POST['name_art'];
        $type_art = $_POST['type_art'];
        $id_artist = $_POST['id_artist'];

        if($name_art=="" || $type_art == "" || $id_artist =="")
          {
            echo "<input class=\"message\" value=\"No empty fields\">"; 
          }
          else{
        include("conect_sql.php");

        $querynewuser = "SELECT * FROM art_table 
        WHERE NAME_ART = '$name_art' AND TYPE_ART = '$type_art' AND ID_ARTIST = '$id_artist'";
        $checkingdouble = mysqli_query($conexion, $querynewuser);
        $duplicate = mysqli_num_rows($checkingdouble);

        if ($duplicate == 0) {
            $conexion->query("INSERT INTO art_table (
              NAME_ART, TYPE_ART, ID_ARTIST)
              VALUES ('$name_art', '$type_art', '$id_artist')");
              
              echo "<input class=\"message\" value=\"Added successfully\">"; 
              include("close_sql.php");
        }
        else{
          echo "<input class=\"message\" value=\"Already exist\">"; 
        }
      }
      }
  ?>