<?php 


session_start();
session_unset();
session_destroy();
header("location:Vista5.php");
 ?>