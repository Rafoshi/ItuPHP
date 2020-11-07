<?php
    include 'connection.php';

    session_start();

    $login = $_POST['email'];
    $password = $_POST['pwd'];

    $query = $cn -> query("select * from tbl_user where user_email = '$login' and user_password = '$password';");

    if($query -> rowCount() == 1) {
        $show = $query -> fetch(PDO::FETCH_ASSOC);

        if($show['user_lvl'] == 1){
            $_SESSION['Acess'] = $show['user_lvl'];
            $_SESSION['ID'] = $show['user_id'];

            header('location:/ituphp/home-logged-admin.php');
        }
        else{
            $_SESSION['Acess'] = $show['user_lvl'];
            $_SESSION['ID'] = $show['user_id'];

            header('location:/ituphp/home-logged.php');
        }

    }
    else{
        header('location:/ituphp/userNotFound.html');
    }
?>
