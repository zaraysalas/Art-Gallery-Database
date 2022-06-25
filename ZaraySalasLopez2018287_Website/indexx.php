<?php
include("indexx_login.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZaraySalas2010287</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Sakae-Curved-Header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid text-center text-light d-flex d-lg-flex align-items-lg-center" id="container1" style="background-image: url(&quot;assets/img/entrance-museum.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;height: 645px;filter: brightness(110%);">
        <div class="jumbotron text-center" style="background-color: rgba(7,54,66,0.87);padding: 0px;opacity: 0.88;margin-bottom: 8px;">
            <h1 class="text-center color-yellow size"><img src="assets/img/socrates-png-14.png" width="60">Zaray Salas's Art Gallery<img src="assets/img/socrates-png-14.png" width="60"></h1>
            <div class="row align-items-center" style="margin-left: 0px;margin-right: 0px;">
                <div class="col-md-4 d-inline-block align-self-center" style="padding-right: 5px;padding-left: 5px;">
                    <h2 class="text-center white-heading">Create an account.</h2>
                    <div class="collapse-div">
                        <div class="collapse-container"><a class="btn btn-primary text-center buttons" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">New User</a>
                            <div class="collapse" id="collapse-1">
                            <form method="post" action="indexx.php"><input name="fname1" class="form-control" type="text" placeholder="First Name" required=""><input name="lname1" class="form-control" type="text" placeholder="Last Name" required="">
                                    <div class="d-flex" style="width: 243px;"><input name="num1" class="form-control" type="text" placeholder="Number" inputmode="numeric" style="width: 82px;" required=""><input name="st1" class="form-control" type="text" placeholder="Street" style="width: 161px;" required=""></div>
                                    <div
                                        class="d-flex"><input name="county1" class="form-control" type="text" placeholder="County" inputmode="numeric" style="width: 121.5px;" required=""><input name="country1" class="form-control" type="text" placeholder="Country" style="width: 121.5px;" required=""></div>
                            <input
                                class="form-control" type="email" name="email1" placeholder="Email" required=""><input name="username1" class="form-control" type="text" placeholder="Username" required=""><input class="form-control" type="password" placeholder="Password" name="password1" required="">
                                <button name="sign" class="btn btn-primary btn-block buttons" type="submit">Sign Up</button></form>

<?php
  include("indexx_createaccount.php");
?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="text-center white-heading">Welcome</h2>
                <p>at the ART GALLERY.</p>
                <p><i class="fa fa-arrow-circle-left"></i>If It is your first time with us, Create an account to have access to the Gallery.</p>
                <p>If you already have an account, WELCOME again.<i class="fa fa-arrow-circle-right"></i></p>
            </div>
            <div class="col-md-4 align-self-center d-inline-block">
            <?php
            if($_SESSION['successful']==2){
                echo "<input class=\"message\" value=\"Data incorrect\">"; 
            }
?>
                <h2 class="text-center white-heading">Log in</h2>
                <div class="collapse-div">
                    <div class="collapse-container"><a name="btn2-collapse" class="btn btn-primary buttons" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">Already a user</a>
                        <div class="collapse" id="collapse-2">
                            <form method="post" action="indexx.php">
                                <div class="form-group"><input class="form-control" type="text" name="username2" placeholder="User Name" required=""><input class="form-control" type="password" name="password2" placeholder="Password" style="margin-top: 18px;" required=""></div>
                                <div
                                    class="form-group"><button name="login" class="btn btn-primary btn-block buttons" type="submit">Log In</button></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/-Fixed-Navbar-start-with-transparency-background-BS4-.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>