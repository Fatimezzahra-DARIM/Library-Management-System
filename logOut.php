<?php 
    // include "connex.php";
    // echo"hiiii";
    // session_unset();
    // header("location: index.php");
    session_start();
    unset($_SESSION['admin_id']);
    session_destroy();
    header('location: signIn.php');

?>
