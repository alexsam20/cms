<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=udemy_cms', 'alex', 'alex1970MD3214', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occurred with the database connection...';
    die();
}

return $pdo;