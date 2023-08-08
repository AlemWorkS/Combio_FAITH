<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "combio";

// Récupérez les données du nouvel élément depuis la requête POST

$IDEMBALLAGE = $_POST['IDEMBALLAGE'];
$LIBEMBALLAGE = $_POST['LIBEMBALLAGE'];



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour insérer un nouvel élément dans la table "produits"
    $sql = "INSERT INTO emballage
            VALUES (:IDEMBALLAGE, :LIBEMBALLAGE, :nomcatego)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDEMBALLAGE', $IDEMBALLAGE);
    $stmt->bindParam(':LIBEMBALLAGE', $LIBEMBALLAGE);
    

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