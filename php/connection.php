<?php
    $servidor = "Localhost";
    $usuario = "itu";
    $senha = "123456";
    $banco = "Infityphp";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>