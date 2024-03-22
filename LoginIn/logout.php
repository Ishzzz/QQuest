<?php 
    session_start();
    session_unset();
    session_destroy();
    echo "<script>alert('Logged Out successfully!');window.location.href = '../LoginIn/signlog.html';</script>";
?>