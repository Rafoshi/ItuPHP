<?php
    include 'connection.php';
    $order = $_POST['checked'];
    $statusQuery = getConnection() -> query("SELECT order_status FROM infityphp.tbl_order where order_id = $order");

    $status = $statusQuery -> fetch(PDO::FETCH_ASSOC);

    if($status['order_status'] == "Pendente"){
        $updateQuery = getConnection() -> query("UPDATE infityphp.tbl_order SET order_status = 'Completo' WHERE order_id = '$order'");
    }
    else if($status['order_status'] == "Completo"){
        $updateQuery = getConnection() -> query("UPDATE infityphp.tbl_order SET order_status = 'Pendente' WHERE order_id = '$order';");
    }
     header('location:../pt-br/track-order.php');
?>
