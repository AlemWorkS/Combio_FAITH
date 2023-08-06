<?php
// Démarrage de la session pour stocker les données du panier

// Fonction pour mettre à jour la quantité d'un élément dans le panier
function updateCartItemQuantity($itemName, $quantity) {
  // Vérification si le panier existe dans la session
  if (isset($_SESSION['cart'])) {
    // Récupération des données du panier à partir de la session
    $cart = $_SESSION['cart'];

    // Recherche de l'élément à mettre à jour dans le panier
    $itemIndex = array_search($itemName, array_column($cart, 'name'));
    if ($itemIndex !== false) {
      // Si l'élément a été trouvé, mise à jour de sa quantité
      $cart[$itemIndex]['quantity'] = $quantity;

      // Enregistrement des données mises à jour du panier dans la session
      $_SESSION['cart'] = $cart;
    }
  }
}

// Fonction pour retirer un élément du panier
function removeCartItem($itemName) {
  // Vérification si le panier existe dans la session
  if (isset($_SESSION['cart'])) {
    // Récupération des données du panier à partir de la session
    $cart = $_SESSION['cart'];

    // Recherche de l'élément à retirer dans le panier
    $itemIndex = array_search($itemName, array_column($cart, 'name'));
    if ($itemIndex !== false) {
      // Si l'élément a été trouvé, le retirer du panier
      array_splice($cart, $itemIndex, 1);

      // Enregistrement des données mises à jour du panier dans la session
      $_SESSION['cart'] = $cart;
    }
  }
}

// Traitement des requêtes POST pour mettre à jour ou retirer des éléments dans le panier
if (isset($_POST['update-cart'])) {
  // Récupération des données de la requête POST
  $itemName = $_POST['name'];
  $itemQuantity = intval($_POST['quantity']);

  // Mise à jour de la quantité de l'élément dans le panier
  updateCartItemQuantity($itemName, $itemQuantity);
} elseif (isset($_POST['remove-from-cart'])) {
  // Récupération des données de la requête POST
  $itemName = $_POST['name'];

  // Retrait de l'élément du panier
  removeCartItem($itemName);
}

// Vérification si le panier existe dans la session
if (isset($_SESSION['cart'])) {
  // Récupération des données du panier à partir de la session
  $cart = $_SESSION['cart'];

  // Calcul du total à payer
  $total = 0;
  foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
  }

  // Création du code HTML pour afficher les éléments du panier sous forme de tableau
  $cartHTML = '<table><tr><th>Image</th><th>Nom</th><th>Prix</th><th>Quantité</th><th></th></tr>';
  foreach ($cart as $item) {
    $cartHTML .= '<tr>
      <td><img src="' . $item['image'] . '" alt="' . $item['name'] . '"></td>
      <td>' . $item['name'] . '</td>
      <td>' . $item['price'] . '</td>
      <td>
        <form method="post" action="">
          <input type="hidden" name="name" value="' . $item['name'] . '">
          <input type="number" name="quantity" value="' . $item['quantity'] . '" min="1">
        </form>
      </td>
      <td>
        <form method="post" action="">
          <input type="hidden" name="name" value="' . $item['name'] . '">
          <button type="submit" name="remove-from-cart">Retirer</button>
        </form>
      </td>
    </tr>';
  }
  $cartHTML .= '<tr><td colspan="4">Total:</td><td id="total">' . $total . '</td></tr>';
  $cartHTML .= '</table>';

  // Affichage des éléments du panier dans la div avec l'id "cart"
  echo '<div class="shoping__cart__table" id="cart">' . $cartHTML . '</div>';
} else {
  // Si le panier n'existe pas, afficher un message indiquant que le panier est vide
  echo '<div class="shoping__cart__table" id="cart">Votre panier est vide.</div>';
}
?>

<script>
// Fonction pour mettre à jour les données du panier en utilisant une requête AJAX
function updateCartData(itemName, itemQuantity) {
  // Création de l'objet XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Ouverture de la connexion avec le serveur
  xhr.open('POST', 'cart.php');

  // Définition du type de contenu de la requête
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Envoi des données de la requête au serveur
  xhr.send('update-cart=1&name=' + itemName + '&quantity=' + itemQuantity);

  // Traitement de la réponse du serveur
  xhr.onload = function() {
    if (xhr.status == 200) {
      // Si la réponse est OK, mise à jour du total affiché sur la page
      updateTotal();
    } else {
      // Si une erreur s'est produite, affichage d'un message d'erreur
      alert('Une erreur s\'est produite lors de la mise à jour des données du panier.');
    }
  };
}

// Fonction pour mettre à jour le total affiché sur la page
function updateTotal() {
  // Récupération de toutes les lignes du tableau du panier
  var rows = document.querySelectorAll('#cart table tr');

  // Initialisation de la variable total
  var total = 0;

  // Boucle sur toutes les lignes sauf la première (en-tête) et la dernière (total)
  for (var i = 1; i < rows.length - 1; i++) {
    // Récupération du prix et de la quantité à partir de la ligne
    var price = parseFloat(rows[i].children[2].textContent);
    var quantity = parseInt(rows[i].querySelector('input[name="quantity"]').value);

    // Ajout du prix * quantité au total
    total += price * quantity;
  }

  // Mise à jour du total affiché sur la page
  document.querySelector('#total').textContent = total;
}

// Ajout d'un écouteur d'événements à tous les champs de saisie de quantité pour mettre à jour les données du panier lorsqu'ils sont modifiés
var quantityInputs = document.querySelectorAll('input[name="quantity"]');
for (var i = 0; i < quantityInputs.length; i++) {
  quantityInputs[i].addEventListener('change', function(event) {
    // Récupération des données de l'élément modifié
    var itemName = event.target.parentNode.querySelector('input[name="name"]').value;
    var itemQuantity = event.target.value;

    // Mise à jour des données du panier en utilisant une requête AJAX
    updateCartData(itemName, itemQuantity);
  });
}
</script>
