<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col"> </th>
            <th scope="col">Tipo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'connection.php';

                session_start();
                $userID = $_SESSION['ID'];

                $result = $cn -> query("SELECT order_type, order_desc, order_status, fk_user_id, order_id FROM infityphp.tbl_order where fk_user_id = $userID;");

                while ($row = $result -> fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>'.'<th scope="row">'.'</th>'."<td>".$row['order_type']."</td><td>".$row['order_desc']."</td><td>".$row['order_status']."</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>