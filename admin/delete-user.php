<?php
include "../config/constants.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="delete from users where id ='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['user']="<div class='success'>users is Deleted</div>";
        header("location:manage-user.php");
    }else{
        $_SESSION['user']="<div class='error'>users is not Deleted</div>";
        header("location:manage-user.php");

    }
}else{
    header("location:manage-user.php");
}