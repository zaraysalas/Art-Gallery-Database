<?php
include("logout.php");
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

<body>
    <div>
        <header>
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white align-items-start hiding" id="transmenu">
                <div class="container"><a class="navbar-brand color-yellow" href="#"><img width="60" src="assets/img/socrates-png-14.png"><strong>Zaray Salas's Art Gallery</strong><br></a><button data-toggle="collapse" class="navbar-toggler collapsed" data-target="#navcol-1"><span></span><span></span><span></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#my-details">My Details</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#fav">Favorite List</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#gallery">Gallery</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#contact-us">Contact Us</a></li>
                        </ul>
                </div><form method="post"><button name="logout" class="btn btn-light text-center ml-auto buttons" type="submit">LOG OUT</button></form></div>
    </nav>
    </header>
    </div>
    <div class="row">
        <div class="col-md-4 squares blue-square"><a class="big-menu-links navigation-clean-search" href="#my-details">My Details</a></div>
        <div class="col-md-4 squares yellow-square"><a class="big-menu-links navigation-clean-search" href="#fav">Favorite List</a></div>
        <div class="col squares pink-square"><form method="post"><button name="logout" class="btn btn-light text-center ml-auto buttons" type="submit">LOG OUT</button></form></div>
    </div>
    <div class="row">
        <div class="col pic-square">
            <h1 class="text-center customer color-yellow size"><img class="customer-socrates" src="assets/img/socrates-png-14.png">Zaray Salas's Art Gallery<img class="customer-socrates" src="assets/img/socrates-png-14.png"></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 squares pink-square"><a class="big-menu-links navigation-clean-search" href="#gallery">Gallery</a></div>
        <div class="col-md-4 squares blue-square"><a class="big-menu-links navigation-clean-search" href="#gallery">the Gallery by</a></div>
        <div class="col-md-4 squares yellow-square"><a class="big-menu-links navigation-clean-search" href="#contact-us">Contact Us</a></div>
    </div>

    <header id="my-details" class="blue-square list">
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
                    <form method="post" action="customer.php"><div class="d-flex">
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

    <div class="container gallery" id="fav">
        <h1 class="color-yellow size">Favorite List</h1>
            <form class="float-right align-items-center" method="post" action="customer.php" style="width:100%">
                <div class="d-inline-flex float-right align-items-center">
                    <button name='showfav' class="btn btn-primary text-center buttons" type="submit">Show List</button>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fa fa-gear"></i></th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>TYPE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('customer_showfav.php');
                        ?>
                    </tbody>
                </table>
            </div>
    </div>

    <div class="container gallery" id="gallery">
        <h1 class="color-yellow size">Art Gallery</h1>
            <form class="float-right align-items-center" method="post" action="customer.php" style="width:100%">
                <div class="d-inline-flex float-right align-items-center" >
                    <button name='showall' class="btn btn-primary text-center buttons" type="submit">Show All</button>
                    <input name="info_to_searchby" type="text" class="form-control fm-margin">
                    <button name='searchby' style="width: 30px;height: 35px;" class="btn btn-primary buttons-config" type="submit"><i class="fa fa-search icons-config"></i></button>
                </div>
            </form>

        <div class="table-responsive">
            
            <table class="table">
                <thead>
                    <tr>
                        <th><i class="fa fa-gear"></i></th>
                        <th>ID ART</th>
                        <th>NAME</th>
                        <th>TYPE</th>
                        <th>ARTIST FIRSTNAME</th>
                        <th>LAST NAME</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('customer_searchby.php');
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   
    <div id="contact-us" class="contact-us yellow-square list">
        <form id="contact-us" href="#" data-bss-recipient="ca6dd76ac459cc101d425a08aa085b28">
            <h2 class="text-center color-yellow size">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email" required=""></div>
            <div class="form-group"><textarea class="form-control message-contact-us" name="message" placeholder="Message" rows="14" required=""></textarea>
        </div><a class="btn btn-light text-center ml-auto buttons" role="button" href="#">Send</a>
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
    <script src="assets/js/acordeon.js"></script>
</body>

</html>