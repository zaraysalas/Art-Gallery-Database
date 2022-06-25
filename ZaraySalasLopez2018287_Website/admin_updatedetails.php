<?php
//include("landing.php");
error_reporting( error_reporting() & ~E_NOTICE );

include("conect_sql.php");

    $fname1 = $_POST['fname1'];
    $lname1 = $_POST['lname1'];
    $num1 = $_POST['num1'];
    $st1 = $_POST['st1'];
    $county1 = $_POST['county1'];
    $country1 = $_POST['country1'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];

      if(isset($_POST['update']))
      {
          if($fname1=="" || $lname1 == "" || $num1=="" || $st1=="" || $county1=="" || $country1=="" || $email1=="" || $password1=="")
          {
            echo "<input class=\"message\" value=\"No empty fields\">"; 
          }
          else 
          {
          $query_update = "UPDATE CUSTOMER_TABLE
          SET PASSWORD_CUSTOMER='$password1',
          FNAME_CUSTOMER='$fname1',
          LNAME_CUSTOMER='$lname1',
          NUMADDRESS_CUSTOMER='$num1',
          ST_CUSTOMER='$st1',
          COUNTY_CUSTOMER='$county1',
          COUNTRY_CUSTOMER='$country1',
          EMAIL_CUSTOMER='$email1'
          WHERE USERNAME = '".$_SESSION['username2']."'";

        mysqli_query($conexion,$query_update);
        
        $_SESSION['password2'] = $password1;
        $_SESSION['fname'] = $fname1;
        $_SESSION['lname'] = $lname1;
        $_SESSION['num'] = $num1;
        $_SESSION['street'] = $st1;
        $_SESSION['county'] = $county1;
        $_SESSION['country'] = $country1;
        $_SESSION['email'] = $email1;
        echo "<input class=\"message\" value=\"Update successful, RELOAD the page to see changes\">";
          }
        }
        //header('Location: admin.php');
    include("close_sql.php");
  ?>