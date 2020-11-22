<?php
    include 'connection.php';

    session_start();
    $userID = $_SESSION['ID'];


    
    $query = getConnection() -> query("DELETE FROM `infityphp`.`tbl_order` WHERE (`fk_user_id` = '$userID');");
    $query = getConnection() -> query("DELETE FROM `infityphp`.`tbl_user` WHERE (`user_id` = '$userID');");

    header('location:../index.html');
?>
