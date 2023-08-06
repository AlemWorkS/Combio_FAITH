<?php
// Démarrage de la session pour stocker les données du panier
session_start();

// Fonction pour ajouter un élément au panier
function addToCart($item) {
  // Vérification si le panier existe déjà dans la session
  if (!isset($_SESSION['cart'])) {
    // Si le panier n'existe pas, le créer
    $_SESSION['cart'] = [];
  }

  // Vérification si l'élément à ajouter existe déjà dans le panier
  $itemIndex = array_search($item['name'], array_column($_SESSION['cart'], 'name'));
  if ($itemIndex !== false) {
    // Si l'élément existe déjà, augmenter sa quantité
    $_SESSION['cart'][$itemIndex]['quantity']++;
  } else {
    // Sinon, ajouter l'élément au panier
    $_SESSION['cart'][] = $item;
  }
}

// Exemple d'utilisation de la fonction addToCart()
if (isset($_POST['add-to-cart'])) {
  // Récupération des données de l'élément à ajouter
  $itemImage = $_POST['image'];
  $itemName = $_POST['name'];
  $itemPrice = floatval($_POST['price']);

  // Création de l'objet représentant l'élément à ajouter
  $item = [
    'image' => $itemImage,
    'name' => $itemName,
    'price' => $itemPrice,
    'quantity' => 1
  ];

  // Ajout de l'élément au panier
  addToCart($item);
}
?>
