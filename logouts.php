<?php
session_start();
session_destroy();
header("location:pre_index.php");
?>