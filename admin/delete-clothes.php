<?php
include "../config/constants.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="delete from clothes where id ='$id'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $_SESSION['clothes']="<div class='success'>clothes is Deleted</div>";
        header("location:manage-clothes.php");
    }else{
        $_SESSION['clothes']="<div class='error'>clothes is not Deleted</div>";
        header("location:manage-clothes.php");

    }
}else{
    header("location:manage-clothes.php");
}