<?php
    include 'connection.php';

    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['pwd']);


    $queries = getConnection() -> query("select user_email from tbl_user where user_email = '$email'");
    
    if($queries -> rowCount() >= 1){
        header('location:/ituphp/pt-br/register-adm-error.html');
    }
    else{
        try {
            $query = getConnection() -> query("INSERT INTO `infityphp`.`tbl_user` (`user_name`, `user_email`, `user_password`, `user_lvl`) VALUES ('$name', '$email', '$password', '1')");
            header('location:/ituphp/pt-br/register-adm-sucess.php');
        }
        catch(Exception $e) {
            echo '<script>alert("Algo de errado aconteceu... tente novamente ou recarregue a página")</script>';
        }
    }
?>
