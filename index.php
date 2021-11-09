<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['user']) || empty($_SESSION['user'])) {
    if (!empty($_POST)) {
        include_once("restricted/passwords.php");
        $loginuser=$_POST['user'];
        $password=$user[$loginuser];
        $sendpassword=$_POST['password'];
    }
    if (password_verify($sendpassword, $password)) {
        $_SESSION['user']=$loginuser;
        header('Location: calendarinput.php');
        exit();
    } else {
        include_once("login.php");
    }
} else {
    header('Location: calendarinput.php');
    exit();
}
?>
