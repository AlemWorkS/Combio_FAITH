<?php
// Assurez-vous d'avoir les informations de connexion correctes à votre base de données
$servername = "localhost";
$username = "root";
$password = "jojo225@";
$dbname = "combio";

// Récupérez l'ID de l'élément à supprimer depuis la requête POST
$ligneCom = $_POST['supprimer'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour supprimer l'élément de la table "produits"
    $sql = "DELETE FROM commandes WHERE nocommande = :nocommande";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nocommande', $ligneCom);
    $stmt->execute();
} catch(PDOException $e) {
    die("Erreur lors de la suppression de l'élément : " . $e->getMessage());
}

$conn = null;
header('Location: orders.php');

?>
