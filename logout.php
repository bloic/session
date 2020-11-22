<?php
session_start();
if(!empty($_SESSION)){
    $_SESSION = array();
    session_destroy();
    unset($_SESSION);
    header('location:login.php');
} else {
    header('location:login.php');
}


