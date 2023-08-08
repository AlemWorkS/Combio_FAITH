<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "combio";

// Récupérez les données du nouvel élément depuis la requête POST

$IDFOURNISSEUR = $_POST['IDFOURNISSEUR'];
$IDPAYS = $_POST['IDPAYS'];
$NOMFOURNISSEUR = $_POST['NOMFOURNISSEUR'];
$PRENOMFOURNISSEUR = $_POST['PRENOMFOURNISSEUR'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour insérer un nouvel élément dans la table "produits"
    $sql = "INSERT INTO fournisseur
            VALUES (:IDFOURNISSEUR, :IDPAYS, :NOMFOURNISSEUR, :PRENOMFOURNISSEUR)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDFOURNISSEUR', $IDFOURNISSEUR);
    $stmt->bindParam(':IDPAYS', $IDPAYS);
    $stmt->bindParam(':NOMFOURNISSEUR', $NOMFOURNISSEUR);
    $stmt->bindParam(':PRENOMFOURNISSEUR', $PRENOMFOURNISSEUR);

    $stmt->execute();
} catch(PDOException $e) {
    die("Erreur lors de l'insertion de l'élément : " . $e->getMessage());
}


$conn = null;

// Renvoyer une réponse JSON pour indiquer que l'insertion s'est terminée avec succès
$response = array('message' => 'Insertion réussie');
header('Content-Type: application/json');
echo json_encode($response);
?>