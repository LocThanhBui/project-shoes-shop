<?php

    session_start();
    session_unset("user");
    header('location:login-register.php');
?>