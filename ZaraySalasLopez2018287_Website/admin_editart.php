<?php
header('Location: indexx.php');
if($_GET){
    $id_get = $_GET['artid'];        
    include("conect_sql.php");
        $query_search5 = mysqli_query($conexion,"SELECT * FROM art_table
            WHERE ID_ART = '$id_get'");
        while ($query_search6 = mysqli_fetch_array($query_search5))
        {   
            echo"
                <tr>
                    <form method=\"post\" action=\"admin.php\">
                        <td><button name=\"update5\" class=\"btn buttons\" type=\"submit\">Update</button></td>
                        <td><input name=\"id_art\" placeholder=\"ID art\" class=\"form-control\" value=\"".$query_search6['ID_ART']."\" readonly></td>
                        <td><input name=\"name_art\" placeholder=\"Name\" class=\"form-control\" value=\"".$query_search6['NAME_ART']."\" required=\"\"></td>
                        <td><input name=\"type_art\" placeholder=\"Type Art\" class=\"form-control\" value=\"".$query_search6['TYPE_ART']."\" required=\"\"></td>
                        
                        <td>
                            <select placeholder=\"ID_ARTIST\" class=\"form-control\" name=\"id_artist\" required=\"\">
                                <option>".$query_search6['ID_ARTIST']."</option>        
                                <option>1001</option>
                                <option>1002</option>
                                <option>1003</option>
                                <option>1004</option>
                                <option>1005</option>
                            </select>
                            </td>
                        </form>
                </tr>
            ";
        }


    include("close_sql.php");
}
    
    $id_art = $_POST['id_art'];
    $name_art = $_POST['name_art'];
    $type_art = $_POST['type_art'];
    $id_artist = $_POST['id_artist'];

      if(isset($_POST['update5']))
      {
          if($name_art=="" || $type_art == "" || $id_artist=="")
          {
            echo "<input class=\"message\" value=\"NO empty fields\">"; 
          }
          else 
          {
            include("conect_sql.php");

          $query_update3= "UPDATE art_table
          SET NAME_ART='$name_art',
          TYPE_ART='$type_art',
          ID_ARTIST = '$id_artist'
          WHERE ID_ART='$id_art'";

        mysqli_query($conexion,$query_update3);

        $query_search7 = mysqli_query($conexion,"SELECT * FROM art_table
        WHERE ID_ART = '$id_art'");
        while ($query_search8 = mysqli_fetch_array($query_search7))
        {   
            echo"
                <tr>
                    <td></td>
                    <td>".$query_search8['ID_ART']."</td>
                    <td>".$query_search8['NAME_ART']."</td>
                    <td>".$query_search8['TYPE_ART']."</td>
                    <td>".$query_search8['ID_ARTIST']."</td>
                </tr>
            ";
        }
        }
        include("close_sql.php");  
        echo "<input class=\"message\" value=\"Added successfully\">"; 
          }
        
?>