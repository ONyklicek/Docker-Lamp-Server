<?php

$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = null;

try{
    $database = 'mysql:host=database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Úspěch: Bylo vytvořeno správné připojení k MySQL! .";    
} catch(PDOException $e) {
    echo "Chyba: Nelze se připojit k MySQL. Error:\n $e";
}

$pdo = null;