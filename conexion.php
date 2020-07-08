<?php
$link = 'mysql:host=127.0.0.1:3307;dbname=yt_colores';
$usuario = 'root';
$pass = '';

try {
    $pdo = new PDO($link, $usuario, $pass);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
