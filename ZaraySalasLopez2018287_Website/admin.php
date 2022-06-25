<?php
include("logout.php");
include("contact-form.php");
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
    <link rel="stylesheet" href="assets/css/styles1.css">
</head>

<body class="text-dark">
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-search">
        <div class="container"><a class="navbar-brand color-yellow" href="#"><img src="assets/img/socrates-png-14.png" width="60"><strong>Zaray Salas's Art Gallery</strong><br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#my-details">My Details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#user-list">Users List</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#artists-list">Artist List</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#art-list">Art List</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <h1 class="text-center mx-auto" style="padding-top: 0px;padding-bottom: 0px;padding-right: 18px;padding-left: 18px;font-size: 33px;">Administrator</h1>
                <form method="post"><button name="logout" class="btn btn-light text-center ml-auto buttons" type="submit">LOG OUT</button></form></div>
        </div>
    </nav>
    <header id="my-details" class="overlay">
        <div class="overlay">
            <h1 class="color-yellow size">
            <?php
                echo $_SESSION['fname'] . " " . $_SESSION['lname'];
            ?>
            </h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-right">
                        <h3>Name:</h3>
                        <h3>Address:</h3>
                        <h3 id="white-username">Username:</h3>
                        <h3>Password:</h3>
                        <h3>E-mail:</h3>
                    </div>
                    <div class="col-md-6 text-left">
                    <form method="post" action="admin.php"><div class="d-flex">
                        <input type="text" class="form-control admin" placeholder="First Name" value="<?php echo $_SESSION['fname'];?>" name="fname1">
                        <input type="text" class="form-control admin" placeholder="Last Name" value="<?php echo $_SESSION['lname'];?>"name="lname1"></div>
                        <div class="d-flex">
                        <input type="text" class="form-control admin" placeholder="Address Number" value="<?php echo $_SESSION['num'];?>" name="num1">
                        <input type="text" class="form-control admin" placeholder="Street" value="<?php echo $_SESSION['street'];?>" name="st1"></div>
                        <div class="d-flex">
                        <input type="text" class="form-control admin" placeholder="County" value="<?php echo $_SESSION['county'];?>" name="county1">
                        <input type="text" class="form-control admin" placeholder="Country" value="<?php echo $_SESSION['country'];?>" name="country1"></div>
                        <input type="text" class="form-control admin" placeholder="UserName" value="<?php echo $_SESSION['username2'];?>" name="username1" readonly>
                        <input type="text" class="form-control admin" placeholder="Password" value="<?php echo $_SESSION['password2'];?>" name="password1">
                        <input
                            type="email" class="form-control admin" placeholder="E-mail" value="<?php echo $_SESSION['email'];?>" name="email1"></div>
                </div>
            </div><button name="update" class="btn btn-light buttons" type="submit">Update details</button></div></form>
            <?php
                include("admin_updatedetails.php");
            ?>
    </header>
    <div id="user-list" class="users list">
        <h1 class="color-yellow size">Users List</h1>
        <div class="d-inline-flex" style="width:100%">
        <form method="post" action="admin.php">
        <div class="collapse-div" >
            <div class="collapse-container"><a class="btn btn-primary text-center buttons" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">New User</a>
                <div class="collapse" id="collapse-1">
                    
                        <input class="form-control" type="text" placeholder="First Name" name="fname" required="">
                        <input class="form-control" type="text" placeholder="Last Name" name="lname" required="">
                        <div class="d-flex" style="width: 243px;">
                        <input class="form-control" type="text" placeholder="Number" inputmode="numeric" style="width: 82px;" name="num" required="">
                        <input class="form-control" type="text" placeholder="Street" style="width: 161px;" name="st" required=""></div>
                        <div class="d-flex"><input class="form-control" type="text" placeholder="County" inputmode="numeric" style="width: 121.5px;" name="county" required="">
                        <input class="form-control" type="text" placeholder="Country" style="width: 121.5px;" name="country" required=""></div>
                        <input class="form-control" type="email" name="email" placeholder="Email" name="email" required="">
                        <input class="form-control" type="text" placeholder="Username" name="username" required="">
                        <input class="form-control" type="text" placeholder="Password" name="password" required="">
                        <select class="form-control" name="type" required="">
                                <option value="CUSTOMER">CUSTOMER</option>
                                <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                        </select>
                        
                        <button name='newuser' class="btn btn-primary btn-block buttons" type="submit">Add new User</button>
                </div>
            </div>
        </div>
        </form>
        <?php
include("admin_newcustomer.php");
?>
        <form class="float-right align-items-center" method="post" action="admin.php" style="width:100%">
        <div class="d-inline-flex float-right align-items-center" >
                <button name='showall_users' class="btn btn-primary text-center buttons" type="submit">Show All</button>
                <input name="info_to_search1" type="text" class="form-control fm-margin">
                <button name='searchbyuser' style="width: 30px;height: 35px;" class="btn btn-primary buttons-config" type="submit"><i class="fa fa-search icons-config"></i></button>
        </div>
        </form>
        </div>

        <div class="table-responsive">
        <table class="table">
                <thead>
                    <tr>
                        <th><i class="fa fa-gear"></i></th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>TYPE</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>NUMBER</th>
                        <th>STREET</th>
                        <th>COUNTY</th>
                        <th>COUNTRY</th>
                        <th>EMAIL</th>
                    </tr>
                    <tbody>
                    <?php
                        include("admin_searchbyuser.php");
                        include("admin_edituser.php");
                        if($_GET['deleteuser']){
                            echo "<input class=\"message\" value=\"Deleted\">"; 
                        }
                    ?>
                    </thead>
                </tbody>
            </table>
        </div>
    </div>
    <div id="artists-list" class="artists list">
        <h1 class="color-yellow size">Artists List</h1>
        <div class="d-inline-flex" style="width:100%">
        <form method="post" action="admin.php">
        <div class="collapse-div" >
            <div class="collapse-container"><a class="btn btn-primary text-center buttons" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-2" role="button" onclick="<?php echo $_SESSION['anuncios']="";?>">New Artist</a>
                <div class="collapse" id="collapse-2">

                        <input class="form-control" type="text" placeholder="First Name" name="fname_artist" required="">
                        <input class="form-control" type="text" placeholder="Last Name" name="lname_artist" required="">
                        <div class="d-flex" style="width: 243px;"><input class="form-control" type="text" placeholder="Number" name="num_artist" style="width: 82px;" required="">
                        <input class="form-control" type="text" placeholder="Street" name="st_artist" style="width: 161px;" required=""></div>
                        <div class="d-flex"><input class="form-control" type="text" placeholder="County" name="county_artist"  style="width: 121.5px;" required="">
                        <input class="form-control" type="text" placeholder="Country" name="country_artist" style="width: 121.5px;" required=""></div>
                        <input class="form-control" type="text" placeholder="Website" name="website_artist" required="">
                        <button class="btn btn-primary btn-block buttons" type="submit" name="newartist">Add new Artist</button>
                </div>
            </div>
            </div>
        
        </form>
        <?php
include("admin_newartist.php");
?>
        <form class="float-right align-items-center" method="post" action="admin.php" style="width:100%">
        <div class="d-inline-flex float-right align-items-center" >
                <button name='showall_artist' class="btn btn-primary text-center buttons" type="submit">Show All</button>
                <input name="info_to_searchbyartist" type="text" class="form-control fm-margin">
                <button name='searchbyartist' style="width: 30px;height: 35px;" class="btn btn-primary buttons-config" type="submit"><i class="fa fa-search icons-config"></i></button>
        </div>
        </form>

        </div>
        <div class="table-responsive">
            
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fa fa-gear"></i></th>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>NUMBER</th>
                        <th>STREET</th>
                        <th>COUNTY</th>
                        <th>COUNTRY</th>
                        <th>WEBSITE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("admin_searchbyartist.php");
                include("admin_editartist.php");
                if($_GET['deleteartist']){
                    echo "<input class=\"message\" value=\"Deleted\">"; 
                }                 
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="art-list" class="users list">
        <h1 class="color-yellow size">Art List</h1>
        <div class="d-inline-flex" style="width:100%">
        <form method="post" action="admin.php">
        <div class="collapse-div" >
            <div class="collapse-container"><a class="btn btn-primary text-center buttons" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-3" role="button" onclick="<?php echo $_SESSION['anuncios']="";?>">New Art</a>
                <div class="collapse" id="collapse-3">

                        <input name="name_art" class="form-control" type="text" placeholder="Type" required="">
                        <input name="type_art" class="form-control" type="text" placeholder="Name" required="">
                        <select placeholder="Artist ID" class="form-control" name="id_artist" required="">
                                <option>1001</option>
                                <option>1002</option>
                                <option>1003</option>
                                <option>1004</option>
                                <option>1005</option>
                        </select>
                        <button name="newart" class="btn btn-primary btn-block buttons" type="submit">Add new Art</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
include("admin_newart.php");
?>
        <form class="float-right align-items-center" method="post" action="admin.php" style="width:100%">
        <div class="d-inline-flex float-right align-items-center" >
                <button name='showall_art' class="btn btn-primary text-center buttons" type="submit">Show All</button>
                <input name="info_to_search3" type="text" class="form-control fm-margin">
                <button name='searchbyart' style="width: 30px;height: 35px;" class="btn btn-primary buttons-config" type="submit"><i class="fa fa-search icons-config"></i></button>
        </div>
        </form>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cont-buttons-config"><i class="fa fa-gear"></i></th>
                        <th>ID</th>
                        <th>TYPE</th>
                        <th>NAME</th>
                        <th>ARTIST</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("admin_searchbyart.php");
                        include("admin_editart.php");
                        if($_GET['deleteart']){
                            echo "<input class=\"message\" value=\"Deleted\">"; 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="contact-us" class="contact-us yellow-square list">
        <form id="contact-us" method="post" data-bss-recipient="ca6dd76ac459cc101d425a08aa085b28">
            <h2 class="text-center color-yellow size">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" required=""></div>
            <div class="form-group"><textarea class="form-control message-contact-us" name="message" placeholder="Message" rows="14" required=""></textarea>
        </div>
        <a name="send" class="btn btn-light text-center ml-auto buttons" role="button">Send</a>
        </form>
        <div class="container">
            <h2 class="text-center color-yellow size">Zaray Salas's Gallery</h2>
            <p class="white-heading contact-us-address">30 - 34 Westmoreland St<br></p>
            <p class="white-heading contact-us-address">Dublin 2</p>
            <p class="white-heading contact-us-address">Eircode: D02 HK35<br></p>
            <p class="white-heading contact-us-address">Ireland<br></p>
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