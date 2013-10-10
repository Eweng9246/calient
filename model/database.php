<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=mems shipping';
    $username = 'Jeremy';
    $password = 'calient';

    try {
        $MEMS = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>