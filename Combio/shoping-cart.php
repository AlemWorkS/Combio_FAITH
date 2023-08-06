<?php
include 'connexion.php';
include 'panier.php';



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <!-- <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div> -->
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <div>Français</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Accueil</a></li>
                            <li><a href="./shop-grid.html">Produits</a></li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Catégories</span>
                        </div>
                        <ul>
                            <li><a href="#">Alimentation</a></li>
                            <li><a href="#">Beauté</a></li>
                            <li><a href="#">Energies</a></li>
                            <li><a href="#">Huiles naturelles</a></li>
                            <li><a href="#">Tisanes</a></li>
                            <li><a href="#">Santé</a></li>
                            <li><a href="#">Régime minceur</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="Que voulez vous?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+225 0707070707</h5>
                                <span>Disponible 24H / 7 jours</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table" id="cart">
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

} else {
  // Si le panier n'existe pas, afficher un message indiquant que le panier est vide
  $cartHTML = 'Votre panier est vide.';
}
?>

<div class="shoping__cart__table" id="cart">
  <?php echo $cartHTML; ?>
</div>

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





                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="./checkout.html" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Cocody au 428,rue des jardins deux plateaux vallon Abidjan</li>
                            <li>Phone: +225 00 00 07 77 42</li>
                            <li>Email: combio.ci@yahoo.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Liens utiles</h6>
                        <ul>
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">A propos de notre boutique</a></li>
                            <li><a href="#">Notre localisation</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Qui sommmes-nous ?</a></li>
                            <li><a href="#">Nos services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Inscrivez-vous à notre bulletin d'informations dès maintenant !</h6>
                        <p>Recevez des mises à jour par email sur notre boutique et nos offres spéciales.</p>
                        <form action="#">
                            <input type="text" placeholder="Entrez votre email">
                            <button type="submit" class="site-btn">S'abonner</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">

                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>







</body>

</html>