<?php
$page_title="manage clothes";
include "partial/menu.php"; ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Clothes</h1>
            <?php
            if(isset($_SESSION['clothes']))
                echo $_SESSION['clothes'];
            unset($_SESSION['clothes']);

            echo "<br/><br/><br/>";
            ?>
            <!-- Button to Add clothes -->
            <a href="add-clothes.php" class="btn-primary">Add Clothes</a>

            <br/><br/><br/>


            <table class="tbl-full">
                <tr>
                    <th>NO.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Name Category</th>
                    <th>Actions</th>
                </tr>
                <?php
                $sql="select * from clothes";
                $res=mysqli_query($conn,$sql);
                if($res && $res->num_rows>0){
                    $count=0;
                    while($clothes=$res->fetch_assoc()) {
                        $count++;
                        $id = $clothes['id'];
                        $title = $clothes['title'];
                        $description = $clothes['description'];
                        $price = $clothes['price'];
                        $color = $clothes['color'];
                        $size = $clothes['size'];
                        $image_name = $clothes['image_name'];
                        $featured = $clothes['featured'];
                        $active = $clothes['active'];
                        $cat_id = $clothes['cat_id'];

                        $sqll="select title from category where id=$cat_id";
                        $ress=mysqli_query($conn,$sqll);
                            $cat=$ress->fetch_assoc();
                            $cat_title = $cat['title'];


                        ?>

                        <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $title;?></td>
                            <td><?php echo $description;?></td>
                            <td><?php echo $price;?></td>
                            <td><?php echo $color;?></td>
                            <td><?php echo $size;?></td>
                            <td> <img src="<?php echo $image_name;?> " width="50px"></td>
                            <td><?php echo $featured;?></td>
                            <td><?php echo $active;?></td>
                            <td><?php echo $cat_title;?></td>

                            <td>
                                <a href="update-clothes.php?id=<?php echo $id ?>" class="btn-secondary">Update Clothes</a>
                                <a href="delete-clothes.php?id=<?php echo $id ?>" class="btn-danger">Delete Clothes</a>
                            </td>
                        </tr>


                        <?php
                    }
                }else{
                    echo "<tr>
                <td colspan='6'>
                    <div class='error'>No clothes Added.</div>
                </td>
            </tr>";
                }
                ?>
            </table>
        </div>

    </div>

