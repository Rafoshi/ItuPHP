<?php
    session_start();
    include 'connection.php';

    $userID = $_SESSION['ID'];

    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
  
    echo $userID;
    echo 'asadfas';

    if( $password == $repassword){
        $query = $cn -> query("UPDATE `infityphp`.`tbl_user` SET `user_password` = '$password' WHERE (`user_id` = '$userID');");
    }
    else{
        echo '<script>alert("As senhas não são compatíveis");</script>';
    }
?>