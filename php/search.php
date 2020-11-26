<?php
    session_start();
	include './connection.php';

	$userID = $_SESSION['ID'];
	$keyword = $_POST['busca'];

	
	$result = getConnection() -> query("SELECT order_type, order_desc, order_status, fk_user_id, order_id FROM infityphp.tbl_order where fk_user_id = '$userID' and (order_type like concat ('%','$keyword','%') or order_desc like concat ('%', '$keyword', '%') or order_status like concat('%','$keyword','%'));");
	$num = $result->rowCount();
	if ($num >0){
		while ($row = $result -> fetch(PDO::FETCH_ASSOC)) {
			echo '<tr>'.'<th scope="row">'.'</th>'."<td>".$row['order_type']."</td><td>".$row['order_desc']."</td><td>".$row['order_status']."</td></tr>";
		}	
	}
	else{
		echo '<h4 id="errorquery" style="text-align: center; margin-right: -75%;">'."Não existe este item pesquisado".'</h4>';
	}
?>