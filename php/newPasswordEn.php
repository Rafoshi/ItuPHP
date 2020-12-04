<?php
session_start();
include 'connection.php';


$userID = $_SESSION['ID'];
var_dump($userID);
$password = $_GET['password'];
var_dump($password);
$repassword = $_GET['repassword'];
var_dump($repassword);

if ($password == $repassword) {
    getConnection()->query("UPDATE `infityphp`.`tbl_user` SET `user_password` = '$password' WHERE (`user_id` = '$userID');");
    header("location:../en/edit-account-success.php");
} else {
    echo '<script>alert("As senhas não são compatíveis");</script>';
}
