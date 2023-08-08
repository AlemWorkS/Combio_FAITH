<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');
// Récupérez les données mises à jour depuis la requête POST
$IDEMBALLAGE = $_POST['IDEMBALLAGE'];
$LIBEMBALLAGE = $_POST['LIBEMBALLAGE'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour mettre à jour l'élément dans la table "produits"
    $sql = "UPDATE emballage
            SET IDEMBALLAGE = :IDEMBALLAGE, LIBEMBALLAGE = :LIBEMBALLAGE, nomcatego = :nomcatego WHERE IDEMBALLAGE = :IDEMBALLAGE";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDEMBALLAGE', $IDEMBALLAGE);
    $stmt->bindParam(':LIBEMBALLAGE', $LIBEMBALLAGE);
    

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
