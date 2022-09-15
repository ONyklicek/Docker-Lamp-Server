<?php
$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

if (!$link) {
    echo "Chyba: Nelze se připojit k MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Úspěch: Bylo vytvořeno správné připojení k MySQL!" . PHP_EOL;

mysqli_close($link);
