<?php
error_reporting( error_reporting() & ~E_NOTICE );
    session_start();             
    if(isset($_POST['login']))
    {
        $_SESSION['successful']=0;//error: empty field
        $username2 = $_POST['username2'];
        $password2 = $_POST['password2'];

        include("conect_sql.php");

        $querylogin = "SELECT * FROM customer_table WHERE USERNAME = '$username2' AND PASSWORD_CUSTOMER = '$password2'";
        $checking1 = mysqli_query($conexion, $querylogin);
        $checkrow = mysqli_fetch_assoc($checking1);
        $count = mysqli_num_rows($checking1);

        $_SESSION['username2'] = $checkrow['USERNAME'];
        $_SESSION['password2'] = $checkrow['PASSWORD_CUSTOMER'];
        $_SESSION['a_c'] = $checkrow['TYPE_USER'];
        $_SESSION['fname'] = $checkrow['FNAME_CUSTOMER'];
        $_SESSION['lname'] = $checkrow['LNAME_CUSTOMER'];
        $_SESSION['num'] = $checkrow['NUMADDRESS_CUSTOMER'];
        $_SESSION['street'] = $checkrow['ST_CUSTOMER'];
        $_SESSION['county'] = $checkrow['COUNTY_CUSTOMER'];
        $_SESSION['country'] = $checkrow['COUNTRY_CUSTOMER'];
        $_SESSION['email'] = $checkrow['EMAIL_CUSTOMER'];

        if($count == 1){
            switch($_SESSION['a_c'])
            {
                case "ADMINISTRATOR":
                    $_SESSION['successful']=1;//success
                    header('Location: admin.php');
                break;
                case "CUSTOMER":
                    $_SESSION['successful']=1;//success
                    header('Location: customer.php');
                break;
            }

            } else{
                $_SESSION['successful']=0; //error:wrong data
                header('Location: indexx.php');
            }
        include("close_sql.php");
    }
?>