<?php
$page_title="update password";
include "partial/menu.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql="select password from admins where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res && $res->num_rows>0){
        $admin=$res->fetch_assoc();
        $old_password=$admin['password'];
    }else{
        header("location:manage-admin.php");
    }
}else{
    header("location:manage-admin.php");
}

?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Change Password</h1>
            <br><br>


            <form action="" method="POST">

                <table class="tbl-30">
                    <tr>
                        <td>Current Password:</td>
                        <td>
                            <input type="password" name="current_password" placeholder="Current Password">
                        </td>
                    </tr>

                    <tr>
                        <td>New Password:</td>
                        <td>
                            <input type="password" name="new_password" placeholder="New Password">
                        </td>
                    </tr>

                    <tr>
                        <td>Confirm Password:</td>
                        <td>
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="">
                            <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                        </td>
                    </tr>

                </table>

            </form>

        </div>
    </div>

<?php

if(isset($_POST['submit'])) {
    $current_password = md5($_POST['current_password']);
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    if ($old_password == $current_password) {
        if ($new_password == $confirm_password) {
            $new_password = md5($_POST['new_password']);
            $sql = "update admins set password='$new_password'where id='$id'";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                $_SESSION['admin'] = "<div class='success'>admins is updated</div>";
                header("location:manage-admin.php");
            } else {
                $_SESSION['admin'] = "<div class='error'>admins is not updated</div>";
                header("location:manage-admin.php");

            }

        } else {
            echo "password is not matched";
        }

    } else {
        echo "current password is not correct";
    }
}




?>