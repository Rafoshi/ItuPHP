<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <?php
        include 'connection.php';
        $query = $cn -> query('select * from vw_all');

        $show = $query -> fetch(PDO::FETCH_ASSOC);

        echo $show['user_email'];
    ?>
</body>
</html>