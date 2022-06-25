<?php
session_start();

error_reporting( error_reporting() & ~E_NOTICE );

 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $num = $_POST['num'];
    $st = $_POST['st'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];

      if(isset($_POST['newuser']))
      {
        if($fname=="" || $lname == "" || $num=="" || $st=="" || $county=="" || $country=="" || $email=="" || $password=="" || $username=="" || $type=="")
          {
            echo "<input class=\"message\" value=\"NO EMPTY FIELDS\">";
          }
          else{
        include("conect_sql.php");

        $querynewuser = "SELECT * FROM customer_table WHERE USERNAME = '$username' AND EMAIL_CUSTOMER = '$email'";
        $checkingdouble = mysqli_query($conexion, $querynewuser);
        $duplicate = mysqli_num_rows($checkingdouble);

        if ($duplicate == 0) {
            $conexion->query("INSERT INTO customer_table (
              USERNAME, PASSWORD_CUSTOMER, TYPE_USER, FNAME_CUSTOMER, LNAME_CUSTOMER, NUMADDRESS_CUSTOMER, ST_CUSTOMER, COUNTY_CUSTOMER, COUNTRY_CUSTOMER, EMAIL_CUSTOMER)
              VALUES ('$username', '$password', '$type', '$fname', '$lname', '$password', '$st', '$county', '$country', '$email')");
              include("close_sql.php");
              echo "<input class=\"message\" value=\"Added successfully\">"; 
        }
        else{
          echo "<input class=\"message\" value=\"Already exist\">";
        }
      }
      }
  ?>