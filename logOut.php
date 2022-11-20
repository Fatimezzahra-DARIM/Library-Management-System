<?php 
    include "connex.php";
    echo"hiiii";
    session_unset();
    session_destroy();
    header("location: index.php");
