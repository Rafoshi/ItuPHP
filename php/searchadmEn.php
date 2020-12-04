<?php
    include './connection.php';
    session_start();
    $keyword = $_POST['search'];



    $result = getConnection() -> query("SELECT * FROM infityphp.vw_all where user_name like concat ('%','$keyword','%') or order_desc like concat ('%', '$keyword', '%') or order_type like concat ('%','$keyword','%') or order_status like concat('%','$keyword','%') or order_id like concat ('%','$keyword','%');");
    $num = $result->rowCount();
    if ($num >0){
        while ($row = $result -> fetch(PDO::FETCH_ASSOC)) {
            $orderID = $row['order_id'];
            echo'<tr>'.
                '<th scope="row"></th>'.
                "<td>".
                $row['order_type'].
                "</td><td>".
                $row['order_desc'].
                "</td><td>".
                $row['user_name'].
                "</td><td>".
                $row['order_status'].
                "</td><td>".
                "<form name='check' method='POST' action='../php/checkOrdersEn.php'>".
                "<input type='submit' name='checked' id='check-button' value='$orderID' >".
                "</input>".
                "</td></tr>".
                "</form>";
        } 
    }
    else{
        echo '<h4 id="errorquery" style="text-align: center; margin-right: -75%;">'."There is no searched item".'</h4>';
    }

 ?>