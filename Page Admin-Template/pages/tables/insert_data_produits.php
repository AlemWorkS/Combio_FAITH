<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "jojo225@";
$dbname = "combio";

// Récupérez les données du nouvel élément depuis la requête POST
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

    // Requête SQL pour insérer un nouvel élément dans la table "produits"
    $sql = "INSERT INTO produits (libelle, prixvente, codecateg, IDEMBALLAGE, image, poids, description)
            VALUES (:libelle, :prixvente, :codecateg, :IDEMBALLAGE, :image, :poids, :description)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':libelle', $libelle);
$stmt->bindParam(':prixvente', $prixvente);
$stmt->bindParam(':codecateg', $codecateg);
$stmt->bindParam(':IDEMBALLAGE', $IDEMBALLAGE);
$stmt->bindParam(':image', $image);
$stmt->bindParam(':poids', $poids);
$stmt->bindParam(':description', $description);

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
