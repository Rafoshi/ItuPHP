<?php
    $servidor = "Localhost";
    $usuario = "itu";
    $senha = "123456";
    $banco = "infityphp";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    function getConnection() {
        global $cn;
        return $cn;
    }
?>