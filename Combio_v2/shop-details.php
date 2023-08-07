<?php
include 'connexion.php';
include 'ajouter_panier.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détails des produits</title>

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
                            </div>
                            <div class="header__top__right__auth">
                                <a href="./log/log.php"><i class="fa fa-user"></i> Connexion</a>
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
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Accueil</a></li>
                            <li class="active"><a href="./index.php#Ventes">Produits</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="./panier.php"><i class="fa fa-shopping-bag"></i> <span><?=array_sum($_SESSION['panier'])?></span></a></li>
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
                            <li><a href="https://www.performe.co/blog/complements-alimentaires-naturels-efficaces/#:~:text=Parmi%20eux%20%3A%20la%20spiruline%2C%20la,r%C3%A9pond%20%C3%A0%20des%20besoins%20sp%C3%A9cifiques.">Alimentation</a></li>
                            <li><a href="https://www.luluetguite.fr/blog/article/utiliser-gel-aloe-vera.html">Beauté</a></li>
                            <li><a href="https://www.bioandco.bio/10-aliments-energetiques-pour-garder-la-forme/">Énergie</a></li>
                            <li><a href="https://www.passeportsante.net/portail/huiles-vegetales">Huiles naturelles</a></li>
                            <li><a href="https://www.herboristerieduvalmont.com/blog/tisane-un-guide-complet-de-ses-bienfaits-et-de-ses-utilisations-n150">Tisanes</a></li>
                            <li><a href="https://www.cuisineaz.com/diaporamas/recettes-a-l-ail-bonnes-pour-la-sante-1988/interne/1.aspx">Santé</a></li>
                            <li><a href="https://www.doctissimo.fr/html/nutrition/mag_2000/mag1208/nu_3142_menus_1.htm">Régime minceur</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="rechercheBlog.php" method="post">
                                <input type="text" id="motRecherche" name="motRecherche" placeholder="Quel produit voulez-vous?">
                                <button type="submit" class="site-btn">RECHERCHER</button>
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
                        <h2>Casier d'Huiles Naturelles</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Accueil</a>
                            <a href="./index.html">Huiles Naturelles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <?php
                 // Requête SQL pour récupérer les données de la table "modele"
                 $ref = $_GET['ref'];
                 $sql = "SELECT *  FROM produits WHERE refproduits = '$ref'";
                 
                 $result = $conn->query($sql);

                 // Vérifier s'il y a des résultats
                 if ($result->num_rows > 0) {
                    // Parcourir les résultats et afficher les données pour chaque modèle
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-6 col-md-6">';
                        echo '  <div class="product__details__pic">';
                        echo '      <div class="product__details__pic__item">';
                        echo '          <img class="product__details__pic__item--large" src="'.$row["image"].'" alt="">';
                        echo '      </div>';
                        echo '  </div>';
                        echo '</div>';
                        echo '<div class="col-lg-6 col-md-6">';
                        echo '  <div class="product__details__text">';
                        echo '      <h3>'. $row["libelle"] . '</h3>';
                        echo '          <div class="product__details__rating">';
                        echo '              <i class="fa fa-star"></i>';
                        echo '              <i class="fa fa-star"></i>';
                        echo '              <i class="fa fa-star"></i>';
                        echo '              <i class="fa fa-star"></i>';
                        echo '              <i class="fa fa-star-half-o"></i>';
                        echo '          </div>';
                        echo '          <div class="product__details__price">'. $row["prixvente"] .' FCFA  </div>';
                        echo '              <p>'.$row["description"].'</p>';
                        echo '              <div class="product__details__quantity">';
                        echo '                  <div class="quantity">';
                        echo '                      <div class="pro-qty">';
                        echo '                          <input type="text" value="1">';
                        echo '                      </div>';
                        echo '                  </div>';
                        echo '              </div>';
                        echo '              <a href="panier.php" class="primary-btn">Ajouter au panier</a>';
                        echo '              <ul>';
                        echo '                  <li><b>Livraison</b> <span>03 Jours <samp> maximum</samp></span></li>';
                        echo '                  <li><b>Poids</b> <span>'. $row["poids"].'</span></li>';
                        echo '              </ul>';
                        echo '          </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Autres Huiles Naturelles du Casier</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/huile4.png">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Huile de Rincin</a></h6>
                            <h5>6000 FCFA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/huile1.png">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Huile de Nigelle</a></h6>
                            <h5>6000 FCFA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/beauté1.png">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Huile de Coco</a></h6>
                            <h5>5000 FCFA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/huile3.png">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Huile d'Argan</a></h6>
                            <h5>6500 FCFA</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
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
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Inscrivez-vous à notre bulletin d'informations dès maintenant !</h6>
                        <p>Recevez des mises à jour par email sur notre boutique et nos offres spéciales.</p>
                        <form action="abonnement.php" method="post">
                            <input type="text" id="email" name="email" placeholder="Entrez votre email">
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