<?php
// Connexion à la base de données (vous devrez remplacer les valeurs avec celles de votre propre base de données)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "combio";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Requête SQL pour récupérer les données des clients
$sql = "SELECT * FROM pays";
$result = $conn->query($sql);

// Récupération des données sous forme de tableau associatif
$data = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
}

// Fermeture de la connexion à la base de données
$conn = null;

// Envoi des données sous forme de réponse JSON
header('Content-Type: application/json');
echo json_encode($data);


?>
