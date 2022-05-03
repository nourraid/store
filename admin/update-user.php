<?php
$page_title="update user";
include "partial/menu.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="select * from users where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $user=$res->fetch_assoc();
        $username=$user['username'];
        $address=$user['address'];
        $phone=$user['phone'];
        $email=$user['email'];
    }else{header("location:manage-user.php");}
}else{header("location:manage-user.php");}
?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Update User</h1>

            <br><br>


            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td> Name:</td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username;?>">
                        </td>
                    </tr>

                    <tr>
                        <td> Address:</td>
                        <td>
                            <input type="text" name="address" value="<?php echo $address;?>">
                        </td>
                    </tr>

                    <tr>
                        <td> Phone Number:</td>
                        <td>
                            <input type="text" name="phone" value="<?php echo $phone;?>">
                        </td>
                    </tr>

                    <tr>
                        <td> Email:</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $email;?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="">
                            <input type="submit" name="submit" value="Update User" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>
<?php

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $sql="update users set username='$username',address='$address',phone='$phone',email='$email' where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['user']="<div class='success'>user is updated</div>";
        header("location:manage-user.php");
    }else{
        $_SESSION['user']="<div class='error'>user is not updated</div>";
        header("location:manage-user.php");

    }

}
?>