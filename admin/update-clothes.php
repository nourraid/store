<?php
$page_title="update clothes";
include "partial/menu.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="select * from clothes where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $row=$res->fetch_assoc();
        $title_old =$row['title'];
        $featured_old =$row['featured'];
        $active_old=$row['active'];
        $category_old = $row['cat_id'];
        $price_old=$row['price'];
        $description_old=$row['description'];
        $size_old =$row['size'];
        $color_old =$row['color'];
        $old_image_name = $row['image_name'];


    }else{header("location:manage-clothes.php");}
}else{header("location:manage-clothes.php");}
?>
<!-- ************************************************* -->


<?php
if(isset($_POST['submit'])){
    $title =$_POST['title'];
    $featured =$_POST['featured'];
    $active=$_POST['active'];
    $category=$_POST['category'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $size =$_POST['size'];
    $color =$_POST['color'];

    if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
        $name=$_FILES['image']['name'];
        $temp=$_FILES['image']['tmp_name'];
        $ext=explode(".",$name);
        $ext=end($ext);
        $image_name="../images/clothes/".$title.".".$ext;
        move_uploaded_file($temp,$image_name);

    }else{
        $image_name= $old_image_name;
    }

    $sqll="update clothes set title='$title',featured='$featured',active='$active',
                   image_name='$image_name',price='$price',description='$description',
                   cat_id=$category,color='$color',size='$size' where id = $id";
    $ress=mysqli_query($conn,$sqll);
    if($ress){
        $_SESSION['clothes']="<div class='success'>clothes is updated</div>";
        header("location:manage-clothes.php");
    }else{
        $_SESSION['clothes']="<div class='error'>clothes is not updated</div>";
        header("location:manage-clothes.php");

    }

}
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update clothes</h1>
            <br><br>

            <form action="" method="post" enctype="multipart/form-data">

                <table class="tbl-30">

                    <tr>
                        <td>Title:</td>
                        <td>
                            <input type="text" name="title" value="<?php echo $title_old; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Description:</td>
                        <td>
                            <textarea name="description" cols="30" rows="5"><?php echo $description_old; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Price:</td>
                        <td>
                            <input type="number" name="price" value="<?php echo $price_old; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Color: </td>
                        <td>
                            <input type="text" name="color" placeholder="Color of the clothes" value="<?php echo $color_old; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Size: </td>
                        <td>
                            <input type="text" name="size" placeholder="Size of the clothes" value="<?php echo $size_old; ?>">
                        </td>
                    </tr>


                    <tr>
                        <td>Current Image:</td>
                        <td>
                            <img src="<?php echo $old_image_name; ?>" width="80px">
                        </td>
                    </tr>

                    <tr>
                        <td>Select New Image:</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="category">
                                <?php
                                $sql="select id,title from category";
                                $res=mysqli_query($conn,$sql);
                                if ($res && $res->num_rows>0){
                                    while ($category=$res->fetch_assoc()){
                                        $cat_id_old=$category['id'];
                                        $titl=$category['title'];
                                        echo"<option value='$cat_id_old'>$titl</option>";
                                    }}else{
                                    echo "<option value='0'>No Category Found</option>";

                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Featured:</td>
                        <td>
                            <input type="radio" name="featured" value="Yes" <?php echo ($featured_old=="Yes")? "checked":""; ?>> Yes
                            <input type="radio" name="featured" value="No" <?php echo ($featured_old=="No")? "checked":""; ?>> No
                        </td>
                    </tr>

                    <tr>
                        <td>Active:</td>
                        <td>
                            <input type="radio" name="active" value="Yes" <?php echo ($active_old=="Yes")? "checked":""; ?>> Yes
                            <input type="radio" name="active" value="No" <?php echo ($active_old=="No")? "checked":""; ?>> No
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="current_image" value="">

                            <input type="submit" name="submit" value="Update Clothes" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>