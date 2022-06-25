<?php
error_reporting( error_reporting() & ~E_NOTICE );
  
if(isset($_POST['sign']))
  {
        
    $fname1 = $_POST['fname1'];
    $lname1 = $_POST['lname1'];
    $num1 = $_POST['num1'];
    $st1 = $_POST['st1'];
    $county1 = $_POST['county1'];
    $country1 = $_POST['country1'];
    $email1 = $_POST['email1'];
    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
        
    include("conect_sql.php");

    $conexion->query("INSERT INTO customer_table (
    USERNAME, PASSWORD_CUSTOMER, TYPE_USER, FNAME_CUSTOMER, LNAME_CUSTOMER, NUMADDRESS_CUSTOMER, ST_CUSTOMER, COUNTY_CUSTOMER, COUNTRY_CUSTOMER, EMAIL_CUSTOMER)
    VALUES ('$username1', '$password1', 'CUSTOMER', '$fname1', '$lname1', '$password1', '$st1', '$county1', '$country1', '$email1')"); 
    include("close_sql.php");
    echo "<input class=\"message\" value=\"Added successfully\">"; 
  }
?>