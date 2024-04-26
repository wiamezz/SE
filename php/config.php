<?php

try {
    $db_username = "root";
    $db_password = "";
    $db_name = "tutorial";
    $dsn = "mysql:host=localhost;dbname=$db_name";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    $pdo = new PDO($dsn, $db_username, $db_password, $options);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
