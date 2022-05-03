<?php include"layouts/menu.php"?>

<?php

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
        header("location:index.php");
    }else{
        $_SESSION['user']="<div class='error'>faild SginUp</div>";
        header("location:index.php");

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