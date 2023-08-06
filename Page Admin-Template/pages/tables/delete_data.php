<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "combio";

// Récupérez l'ID de l'élément à supprimer depuis la requête POST
$refproduits = $_POST['refproduits'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour supprimer l'élément de la table "produits"
    $sql = "DELETE FROM produits WHERE refproduits = :refproduits";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':refproduits', $refproduits);
    $stmt->execute();
} catch(PDOException $e) {
    die("Erreur lors de la suppression de l'élément : " . $e->getMessage());
}

$conn = null;

// Renvoyer une réponse JSON pour indiquer que la suppression s'est terminée avec succès
$response = array('message' => 'Suppression réussie');
header('Content-Type: application/json');
echo json_encode($response);
?>
