<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "jojo225@";
$dbname = "combio";

// Récupérez les données mises à jour depuis la requête POST
$IDFOURNISSEUR = $_POST['IDFOURNISSEUR'];
$IDPAYS = $_POST['IDPAYS'];
$NOMFOURNISSEUR = $_POST['NOMFOURNISSEUR'];
$PRENOMFOURNISSEUR = $_POST['PRENOMFOURNISSEUR'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour mettre à jour l'élément dans la table "produits"
    $sql = "UPDATE fournisseur
            SET IDFOURNISSEUR = :IDFOURNISSEUR, IDPAYS = :IDPAYS, NOMFOURNISSEUR = :NOMFOURNISSEUR, PRENOMFOURNISSEUR = :PRENOMFOURNISSEUR WHERE IDFOURNISSEUR = :IDFOURNISSEUR";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDFOURNISSEUR', $IDFOURNISSEUR);
    $stmt->bindParam(':IDPAYS', $IDPAYS);
    $stmt->bindParam(':NOMFOURNISSEUR', $NOMFOURNISSEUR);
    $stmt->bindParam(':PRENOMFOURNISSEUR', $PRENOMFOURNISSEUR);

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
