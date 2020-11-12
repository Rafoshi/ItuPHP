<?php
    include 'connection.php';

    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $consulta = $cn -> query("select user_email from tbl_user where user_email = '$email'");
    
    if($consulta -> rowCount() >= 1){
        echo "<script> alert('E-mail inválido') </script>";
    }
    else{
        try {
            $query = $cn -> query("INSERT INTO `infityphp`.`tbl_user` (`user_name`, `user_email`, `user_password`, `user_lvl`) VALUES ('$name', '$email', '$password', '0')");
        }
        catch(Exception $e) {
            echo '<script>alert("Algo de errado aconteceu... tente novamente ou recarregue a página")</script>';
        }
    }
?>