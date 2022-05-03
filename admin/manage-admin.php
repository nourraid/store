<?php
$page_title="manage admin";
include "partial/menu.php";

 ?>

    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>

            <br/>
            <?php
            if(isset($_SESSION['admin']))
                echo $_SESSION['admin'];
            unset($_SESSION['admin']);
            ?>

            <br><br><br>

            <!-- Button to Add Admin -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>

            <br/><br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>NO.</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>

                <?php
                $sql="select * from admins";
                $res=mysqli_query($conn,$sql);
                if($res && $res->num_rows>0){
                    $count=0;
                    while($admin=$res->fetch_assoc()) {
                        $count++;
                        $id = $admin['id'];
                        $name = $admin['name'];

                        ?>

                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $name ?></td>
                            <td>
                                <a href="update-admin.php?id=<?php echo $id ?>" class="btn-secondary"> update </a> &nbsp;
                                <a href="delete-admin.php?id=<?php echo $id ?>" class="btn-danger"> delete </a>&nbsp;
                                <a href="update-password.php?id=<?php echo $id ?>" class="btn-primary"> change password </a>&nbsp;

                            </td>
                        </tr>
                        <?php
                    }

                }else{
                    echo " <tr>
                <td>
                    <p> no admin yet ! </p></td>
            </tr>";
                }
                ?>



            </table>

        </div>
    </div>
    <!-- Main Content Setion Ends -->
