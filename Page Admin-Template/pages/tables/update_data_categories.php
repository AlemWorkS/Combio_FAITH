<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "combio";

// Récupérez les données mises à jour depuis la requête POST
$codecateg = $_POST['codecateg'];
$libelle = $_POST['libelle'];
$nomcatego = $_POST['nomcatego'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour mettre à jour l'élément dans la table "produits"
    $sql = "UPDATE categories
            SET codecateg = :codecateg, libelle = :libelle, nomcatego = :nomcatego WHERE codecateg = :codecateg";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':codecateg', $codecateg);
    $stmt->bindParam(':libelle', $libelle);
    $stmt->bindParam(':nomcatego', $nomcatego);

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
