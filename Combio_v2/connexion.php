<?php
// $pdo = new PDO("mysql: host=localhost;	dbname=carlocation",	"root", "");
// //echo "connexion :OK";
$servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'combio';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }
?>
