<?php
    include 'connection.php';
    $orderID = $_POST['check-button'];
    echo $orderID;
    
    $statusQuery = $cn -> query("SELECT order_status FROM infityphp.tbl_order where order_id = $orderID");

    $status = $statusQuery -> fetch(PDO::FETCH_ASSOC);

    if($status['order_status'] == "Pendente"){
        $updateQuery = $cn -> query("UPDATE `infityphp`.`tbl_order` SET `order_status` = 'Completo' WHERE (`order_id` = '$orderID')");
    }
    if($status['order_status'] == "Completo"){
        $updateQuery = $cn -> query("UPDATE `infityphp`.`tbl_order` SET `order_status` = 'Pendente' WHERE (`order_id` = '$orderID')");
    }


    header('location:../track-order.php')
?>