<?php
$page_title = "index";

include "partial/menu.php";

$sql1 = "select * from admins";
$result1 = mysqli_query($conn, $sql1);
$admins = $result1->num_rows;


$sql2 = "select * from category";
$result2 = mysqli_query($conn, $sql2);
$category = $result2->num_rows;


$sql3 = "select * from users";
$result3 = mysqli_query($conn, $sql3);
$users = $result3->num_rows;


$sql4 = "select * from clothes";
$result4 = mysqli_query($conn, $sql4);
$clothes = $result4->num_rows;
?>


<!-- Main Content Section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>

        <br><br>

        <div class="col-4 text-center">



            <h1> <?php echo $admins?></h1>
            <br />

            Admins
        </div>

        <div class="col-4 text-center">


            <h1><?php echo $category ?></h1>
            <br />
            Category
        </div>

        <div class="col-4 text-center">



            <h1><?php echo $users ?></h1>
            <br />
            Users
        </div>

        <div class="col-4 text-center">



            <h1><?php echo $clothes ?></h1>
            <br />
            Clothes
        </div>

        <div class="clearfix"></div>

    </div>
</div>
<!-- Main Content Setion Ends -->

