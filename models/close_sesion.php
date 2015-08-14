<?php 
    session_start(); 
    $_SESSION = array();
    //setcookie("usuario","",time()-3600,"/","localhost/PizzaWeb/login.php");
    session_destroy(); 
    header('location: ../index.php'); 
?>