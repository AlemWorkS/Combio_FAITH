<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');

// Récupérez les données mises à jour depuis la requête POST
$refproduits = $_POST['refproduits'];
$libelle = $_POST['libelle'];
$prixvente = $_POST['prixvente'];
$codecateg = $_POST['codecateg'];
$IDEMBALLAGE = $_POST['IDEMBALLAGE'];
$image = $_POST['image'];
$poids = $_POST['poids'];
$description = $_POST['description'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour mettre à jour l'élément dans la table "produits"
    $sql = "UPDATE produits
            SET libelle = :libelle, prixvente = :prixvente, codecateg = :codecateg, IDEMBALLAGE = :IDEMBALLAGE, image = :image, poids = :poids, description = :description
            WHERE refproduits = :refproduits";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->bindParam(':prixvente', $prixvente);
    $stmt->bindParam(':codecateg', $codecateg);
    $stmt->bindParam(':IDEMBALLAGE', $IDEMBALLAGE);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':poids', $poids);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':refproduits', $refproduits);

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
