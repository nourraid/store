<?php
$page_title="add clothes";
include "partial/menu.php";
?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Clothes</h1>

            <br><br>



            <form action="" method="POST" enctype="multipart/form-data">

                <table class="tbl-30">

                    <tr>
                        <td>Title: </td>
                        <td>
                            <input type="text" name="title" placeholder="Title of the clothes">
                        </td>
                    </tr>

                    <tr>
                        <td>Description: </td>
                        <td>
                            <textarea name="description" cols="30" rows="5" placeholder="Description of the clothes."></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price">
                        </td>
                    </tr>

                    <tr>
                        <td>Color: </td>
                        <td>
                            <input type="text" name="color" placeholder="Color of the clothes">
                        </td>
                    </tr>

                    <tr>
                        <td>Size: </td>
                        <td>
                            <input type="text" name="size" placeholder="Size of the clothes">
                        </td>
                    </tr>

                    <tr>
                        <td>Select Image: </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <?php
                                $sql="select id,title from category";
                                $res=mysqli_query($conn,$sql);
                                if ($res && $res->num_rows>0){
                                    while ($category=$res->fetch_assoc()){
                                        $id=$category['id'];
                                        $title=$category['title'];
                                        echo"<option value='$id'>$title</option>";
                                    }}else{
                                    echo "<option value='0'>No Category Found</option>";

                                }
                                ?>


                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Featured: </td>
                        <td>
                            <input type="radio" name="featured" value="Yes"> Yes
                            <input type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Active: </td>
                        <td>
                            <input type="radio" name="active" value="Yes"> Yes
                            <input type="radio" name="active" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add clothes" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>




        </div>
    </div>
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
    $sqll="select id from clothes";
    $ress = mysqli_query($conn , $sqll);
    $counter = $ress->num_rows ;
    $counter += 1 ;
    if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
        $name=$_FILES['image']['name'];
        $temp=$_FILES['image']['tmp_name'];
        $ext=explode(".",$name);
        $ext=end($ext);
        $image_name="../images/clothes/".$counter.".".$ext;
        move_uploaded_file($temp,$image_name);

    }else{
        $image_name="../images/logo.png";
    }
    $sql="insert into clothes set
 title='$title',featured='$featured',active='$active',image_name='$image_name',price='$price',description='$description',cat_id='$category',color='$color',size='$size'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['clothes']="<div class='success'>clothes is added</div>";
        header("location:manage-clothes.php");
    }else{
        $_SESSION['clothes']="<div class='error'>clothes is not added</div>";
        header("location:manage-clothes.php");

    }

}


?>