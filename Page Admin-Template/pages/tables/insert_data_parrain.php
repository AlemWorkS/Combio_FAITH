<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');

// Récupérez les données du nouvel élément depuis la requête POST
$id_parrain = $_POST['id_$id_parrain'];
$nom_parrain = $_POST['nom_parrain'];
$prenom_parrain = $_POST['prenom_parrain'];
$ville = $_POST['ville'];
$contact = $_POST['contact'];
$id_parrain = $_POST['poids'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour insérer un nouvel élément dans la table "produits"
    $sql = "INSERT INTO clients (id_$id_parrain, nom_parrain, prenom_parrain,   description)
            VALUES (:id_$id_parrain, :nom_parrain, :prenom_parrain,  :description)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id_$id_parrain', $id_parrain);
$stmt->bindParam(':nom_parrain', $nom_parrain);
$stmt->bindParam(':prenom_parrain', $prenom_parrain);



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
