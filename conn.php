<?php

$host = 'localhost';
$db = "coursesql";
$user = 'root';
$password = '';


$databaseStatement = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($databaseStatement, $user, $password);
    if ($pdo) {
        echo "Lidhja me databazen $db u krye me sukses...";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>