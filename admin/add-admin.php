<?php
$page_title="add admin";
include "partial/menu.php";
?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Add Admin</h1>

            <br><br>


            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td> Name:</td>
                        <td>
                            <input type="text" name="name" placeholder="Enter Your Name">
                        </td>
                    </tr>

                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" placeholder="Your Password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>


        </div>
    </div>

<?php

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $password =md5($_POST['password']);
    $sql="insert into admins set name='$name',password='$password'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['admin']="<div class='success'>admins is added</div>";
        header("location:manage-admin.php");
    }else{
        $_SESSION['admin']="<div class='error'>admins is not added</div>";
        header("location:manage-admin.php");

    }

}



?>