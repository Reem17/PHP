<?php
    session_start();
    session_destroy();
    setcookie("studentcookie","",time()-1);
    header('location:login as.php');
?>