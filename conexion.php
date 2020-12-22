<?php

$dbhost = '************************'; // CONSULTAR CON ADRIÁN
$dbport = '3306';
$dbname = 'sefardata';
$charset = 'utf8';

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$usuario = '******';                 // CONSULTAR CON ADRIÁN
$pass = '*****';                     // CONSULTAR CON ADRIÁN

try {
    $pdo = new PDO($dsn, $usuario, $pass);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

