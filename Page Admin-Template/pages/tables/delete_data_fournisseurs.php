<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');

// Récupérez l'ID de l'élément à supprimer depuis la requête POST
$idfournisseur = $_POST['IDFOURNISSEUR'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour supprimer l'élément de la table "produits"
    $sql = "DELETE FROM fournisseur WHERE IDFOURNISSEUR = :IDFOURNISSEUR";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDFOURNISSEUR', $idfournisseur);
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
