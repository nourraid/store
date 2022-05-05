<?php include "layouts/menu.php";?>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_2.webp);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">NEW</h1>
					   					<h2 class="head-2">Jeans</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="Categoies.php" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/blog-3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Huge</h1>
					   					<h2 class="head-2">Sale</h2>
					   					<h2 class="head-3">45% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="Categoies.php" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">New</h1>
					   					<h2 class="head-2">Arrival</h2>
					   					<h2 class="head-3">up to 30% off</h2>
					   					<p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
					   					<p><a href="Categoies.php" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="clothes.php" class="btn btn-primary">Shop Now</a></p>
                                    <form action="search_product.php" method="post" class="form-inline qbstp-header-subscribe">
                                        <div class="row">
                                            <div class="col-md-12 col-md-offset-0">
                                                <div class="form-group">
                                                    <input type="text" name="term" class="form-control" id="email" placeholder="Search" required>
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<?php
$sql = "select * from clothes order by id desc limit 4";
$res = mysqli_query($conn, $sql);
if($res->num_rows>0){
    ?> <div class="colorlib-shop">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
            <h2><span>Recent Products</span></h2>
            <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
    </div>
    <div class="row">
            <?php
            while ($row=$res->fetch_assoc()) {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];


                ?>
					<div class="col-md-3 text-center">
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

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Our Satisfied Customer says</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">						
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
									<span class="user">Alysha Myers</span>
									<small>Miami Florida, USA</small>
									<blockquote>
										<p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
									<span class="user">James Fisher</span>
									<small>New York, USA</small>
									<blockquote>
										<p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
									<span class="user">Jacob Webb</span>
									<small>Athens, Greece</small>
									<blockquote>
										<p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Our Categories</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>

				<div class="row">
                        <?php
                        $sql = "select * from category  order by id desc limit 3";
                        $res = mysqli_query($conn, $sql);

                        while ($row=$res->fetch_assoc()) {
                            $id = $row['id'];
                            $title = $row['title'];
                            $image_name = $row['image_name'];
                            echo "<div class=\"col-md-4\">
						<article class=\"article-entry\">
							<a href=\"category-clothes.php?id=$id\" class=\"blog-img\" style=\"background-image: url($image_name);\"></a>
							<div class=\"desc\" style=\"padding-right: 104px;\">


								<h2 style=\"text-align: center;\"><a href=\"category-clothes.php?id=$id\">$title</a></h2>

							</div>
						</article>
					</div>";
                        }
                        ?>


				</div>
			</div>
		</div>

<?php include "layouts/footer.php";?>