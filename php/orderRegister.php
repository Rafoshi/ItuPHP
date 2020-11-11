<?php
    include 'connection.php';

    session_start();

    $userID = $_SESSION['ID'];
    $desc = $_POST['desc'];
    $type = $_POST['type'];

   $query = $cn -> query("INSERT INTO `infityphp`.`tbl_order` (`order_desc`, `order_status`, `order_type`, `fk_user_id`) VALUES ('$desc', 'Pendente', '$type', '$userID');");


   switch ($type) {
    case 'Web': header('location:/ituphp/form-web-sucess.html');
      break;
    case 'Mobile': header('location:/ituphp/form-mobile-sucess.html');
      break;
      case 'Web&Mobile': header('location:/ituphp/form-web-mobile-sucess.html');
    break;
}
?>