<?php
$page_title="update admin";
include "partial/menu.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="select * from admins where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $admin=$res->fetch_assoc();
        $name=$admin['name'];
    }else{header("location:manage-admin.php");}
}else{header("location:manage-admin.php");}
?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Update Admin</h1>

            <br><br>


            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td> Name:</td>
                        <td>
                            <input type="text" name="name" value="<?php echo $name;?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="">
                            <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>
<?php

if(isset($_POST['submit'])){
    $name =$_POST['name'];

    $sql="update admins set name='$name' where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['admin']="<div class='success'>admin is updated</div>";
        header("location:manage-admin.php");
    }else{
        $_SESSION['admin']="<div class='error'>admin is not updated</div>";
        header("location:manage-admin.php");

    }

}
 ?>