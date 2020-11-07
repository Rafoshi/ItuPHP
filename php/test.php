<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
        <?php
        include 'connection.php';

        session_start();
        $userID = $_SESSION['ID'];

        $query = $cn -> query("SELECT user_name FROM tbl_user where user_id = $userID ");

        $show = $query -> fetch(PDO::FETCH_ASSOC);

        ?>
        <li class="person-name">
        Olá, <?php echo $show['user_name'] ?>
        </li>
</body>
</html>