<?php
    session_start();
    session_destroy();
    setcookie("profcookie","",time()-1);
    header('location:login as.php');
?>