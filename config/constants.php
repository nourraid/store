<?php
session_start();

define("SITEURL",'http://localhost:63342/store/index.php');
define("servername",'localhost');
define("username",'root');
define("password",'');
define("dbname",'fashion');
$conn=mysqli_connect(servername,username,password,dbname);
if(mysqli_connect_error()){
    echo "connection error";
}

?>