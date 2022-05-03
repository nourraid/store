<?php
$page_title="manage user";
include "partial/menu.php"; ?>

    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage User</h1>

            <br/>
            <?php
            if(isset($_SESSION['user']))
                echo $_SESSION['user'];
            unset($_SESSION['user']);
            ?>


            <br/><br/><br/>

            <table class="tbl-full">
                <tr>
                    <th>NO.</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>

                <?php
                $sql="select * from users";
                $res=mysqli_query($conn,$sql);
                if($res && $res->num_rows>0){
                    $count=0;
                    while($admin=$res->fetch_assoc()) {
                        $count++;
                        $id = $admin['id'];
                        $username = $admin['username'];
                        $address = $admin['address'];
                        $phone = $admin['phone'];
                        $email = $admin['email'];

                        ?>

                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $username ?></td>
                            <td><?php echo $address ?></td>
                            <td><?php echo $phone ?></td>
                            <td><?php echo $email ?></td>
                            <td>
                                <a href="update-user.php?id=<?php echo $id ?>" class="btn-secondary"> update </a> &nbsp;
                                <a href="delete-user.php?id=<?php echo $id ?>" class="btn-danger"> delete </a>&nbsp;
                            </td>
                        </tr>
                        <?php
                    }

                }else{
                    echo " <tr>
                <td>
                    <p> no user yet ! </p></td>
            </tr>";
                }
                ?>



            </table>

        </div>
    </div>
    <!-- Main Content Setion Ends -->
