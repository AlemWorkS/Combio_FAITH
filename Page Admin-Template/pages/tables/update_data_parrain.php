<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');
// Récupérez les données mises à jour depuis la requête POST
$id_parrain = $_POST['id_parrain'];
$nom_parrain = $_POST['nom_parrain'];
$prenom_parrain = $_POST['prenom_parrain'];



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour mettre à jour l'élément dans la table "produits"
    $sql = "UPDATE client
            SET nom_parrain = :nom_parrain, prenom_parrain = :prenom_parrain, id_parrain = :id_parrain, description = :description
            WHERE id_parrain = :id_parrain";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom_parrain', $nom_parrain);
    $stmt->bindParam(':prenom_parrain', $prenom_parrain);

    $stmt->bindParam(':id_parrain', $id_parrain);



    $stmt->execute();
} catch(PDOException $e) {
    die("Erreur lors de la mise à jour de l'élément : " . $e->getMessage());
}

$conn = null;

// Renvoyer une réponse JSON pour indiquer que la mise à jour s'est terminée avec succès
$response = array('message' => 'Mise à jour réussie');
header('Content-Type: application/json');
echo json_encode($response);
?>
