<?php

require_once('config.php');


$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    //$pdo = new PDO("sqlite:tabledb");
    $pdo = new PDO($dsn, $user, $password);
    if ($pdo) {
        echo "Connected to the $db database successfully!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$statement = $pdo->query("SELECT * FROM  messenger");
$rows = $statement->fetchAll(PDO:: FETCH_ASSOC);

echo "<pre>";
print_r($rows);
echo "</pre>";


