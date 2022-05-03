<?php include "layouts/menu.php";?>
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Our Categoies</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span>Categoies</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">

<?php
$sql = "select * from category";
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
