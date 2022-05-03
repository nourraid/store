<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
include "config/constants.php";
if(isset($_POST['submit'])){
    $username =$_POST['username'];
    $password =md5($_POST['password']);
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $sql="insert into users set username='$username',password='$password',phone='$phone',email='$email',address='$address'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['user']="<div class='success'>user is SginUp</div>";
        header("location:signin.php");
    }else{
        $_SESSION['user']="<div class='error'>faild SginUp</div>";
        header("location:pre_index.php");

    }

}



?>


    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/cover-img-1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Sgin Up</h1>
                                    <h2 class="bread"><span><a href="index.php">Home</a></span> <span>Sgin Up</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <form action="#" method="POST" class="colorlib-form">
                        <h1>Sgin Up </h1>
                        <div class="row" >
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="fname">User Name </label>
                                    <input type="text" id="fname" name="username" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="Phone">Phone Number</label>
                                    <input type="text" id="zippostalcode" name="phone" class="form-control" placeholder="Enter Your Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="email">E-mail </label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter Your Address">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Sgin Up" class="btn btn-primary" style="float: right;width: 162px;">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




<?php include"layouts/footer.php"?>