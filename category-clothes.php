<?php include "layouts/menu.php";
$id = $_GET['id'];
$sql = "select * from category where id=$id";
$res = mysqli_query($conn, $sql);
$roww = $res->fetch_assoc();
$title = $roww['title']
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
                                    <h1>Products</h1>
                                    <h2>Clothes on <a href="#" class="text-white">"<?php echo $title;?>"</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

<?php
$sql = "select * from clothes  where cat_id = $id";
$res = mysqli_query($conn, $sql);
if($res->num_rows>0){
    ?> <div class="colorlib-shop">
    <div class="container">
    <div class="row">
    <div class="row row-pb-lg">
    <?php
    while ($row=$res->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $price = $row['price'];
        $image_name = $row['image_name'];


        ?>




        <div class="col-md-4 text-center">
            <div class="product-entry">
                <div class="product-img" style="background-image: url('<?php echo $image_name;?>');">
                </div>
                <div class="desc">
                    <h3><a href="product-detail.php?id=<?php echo $id;?>"><?php echo $title;?></a></h3>
                    <p class="price"><span>$ <?php echo $price;?></span></p>
                </div>
            </div>
        </div>

        <?php
    }

}
?>

    </div>

    </div>
    </div>
    </div>
<?php include "layouts/footer.php"?>