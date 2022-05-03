<?php
include "../config/constants.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="delete from admins where id ='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['admin']="<div class='success'>admins is Deleted</div>";
        header("location:manage-admin.php");
    }else{
        $_SESSION['admin']="<div class='error'>admins is not Deleted</div>";
        header("location:manage-admin.php");

    }
}else{
    header("location:manage-admin.php");
}