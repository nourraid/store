<?php include "layouts/menu.php";
$id = $_GET['id'];
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
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span><a href="clothes.php">Product</a></span> <span>Product Detail</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
<?php
$sql = "select * from clothes where id = $id";
$res = mysqli_query($conn , $sql);
if($res->num_rows>0){
        while ($row=$res->fetch_assoc()) {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];
            $size = $row['size'];
            $color = $row['color'];
            $image_name = $row['image_name'];


        }}



        ?>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
                                        <img src='<?php echo $image_name;?>' style=" width: 474px; height: 446px;">
									</div>
								</div>
								<div class="col-md-7">
									<div class="desc" style="margin-left: 76px; margin-top: 50px;">
										<h3><?php echo $title;?></h3>
										<p class="price">
											<span>$ <?php echo $price;?></span>
										</p>
										<p><?php echo $description;?>.</p>
										<div class="color-wrap">
											<p class="color-desc">
												Color:
                                                <?php echo $color;?>
											</p>
										</div>
										<div class="size-wrap">
											<p class="size-desc">
												Size: 
												<?php echo $size;?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include "layouts/footer.php"?>