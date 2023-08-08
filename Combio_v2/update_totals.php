<?php
session_start();
// Assurez-vous d'avoir une connexion à votre base de données
 $conn = mysqli_connect("localhost", "root", "", "combio");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['productId']) && isset($_POST['quantity'])) {
        $productId = $_POST['productId'];
        $quantity = $_POST['quantity'];

        // Mise à jour de la quantité dans la session
        $_SESSION['panier'][$productId] = $quantity;

        // Calcul des nouveaux totaux
        $totalSousTotal = 0;

        foreach ($_SESSION['panier'] as $productId => $quantity) {
            // Récupérez le prix du produit depuis la base de données
            $produit = mysqli_query($conn, "SELECT prixvente FROM produits WHERE refproduits = $productId");
            $produit = mysqli_fetch_assoc($produit);

            $totalSousTotal += $quantity * $produit['prixvente'];
        }

        $response = array(
            'success' => true,
            'sousTotal' => number_format($totalSousTotal, 0, '.', ' '),
            'total' => number_format($totalSousTotal, 0, '.', ' ')
        );

        echo json_encode($response);
    }
}
?>
