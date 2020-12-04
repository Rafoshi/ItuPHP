<?php
    session_start();
    include 'connection.php';

    $login = $_POST['email'];
    $password = $_POST['pwd'];

  
    $query = getConnection()-> query("select * from tbl_user where user_email = '$login' and user_password = '$password';");


    if($query -> rowCount() == 1) {
        $show = $query -> fetch(PDO::FETCH_ASSOC);

        if($show['user_lvl'] == 1){
            $_SESSION['Acess'] = $show['user_lvl'];
            $_SESSION['ID'] = $show['user_id'];

            header('location:/ituphp/en/home-logged-admin.php');
        }
        else{
            $_SESSION['Acess'] = $show['user_lvl'];
            $_SESSION['ID'] = $show['user_id'];

            header('location:/ituphp/en/home-logged.php');
        }
    }
    else{
        $_SESSION['not_authenticated'] = true;
        header('location:/ituphp/en/login.php');
        exit();
    }
    
?>
