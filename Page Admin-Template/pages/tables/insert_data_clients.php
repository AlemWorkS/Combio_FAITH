<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
include('../../connexion.php');
// Récupérez les données du nouvel élément depuis la requête POST
$noclient = $_POST['noclient'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$ville = $_POST['ville'];
$contact = $_POST['contact'];
$id_parrain = $_POST['poids'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour insérer un nouvel élément dans la table "produits"
    $sql = "INSERT INTO clients (noclient, nom, prenom, ville, contact,  description)
            VALUES (:noclient, :nom, :prenom, :ville, :contact,  :description)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':noclient', $noclient);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':contact', $contact);


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
