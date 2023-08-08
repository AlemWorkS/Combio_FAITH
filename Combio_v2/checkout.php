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
    <title>Caisse</title>

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

    <!-- Header Section Begin -->
    <header class="header">
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
                            <li><a href="./index.php#Ventes">Produits</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Accueil</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
              
            </div>
            <div class="checkout__form">
            <h4>Facture</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <!-- <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nom<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Prénoms<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div> -->
                            </div>
                            <div class="checkout__input">
                                <p>Adresse<span>*</span></p>
                                <input type="text" placeholder="Addresse" class="checkout__input__add">
                                <input type="text" placeholder="Appartement, plus de détails ...">
                            </div>
                            <div class="checkout__input">
                                <p>Téléphone</p>
                                <input type="text" placeholder="Numéro de téléphone">
                            </div>
                            <div class="checkout__input">
                                <p>Note de commande<span>*</span></p>
                                <input type="text"
                                    placeholder="Notez votre commande, ex: note spéciale pour la livraison">
                            </div><br>
                            <h4>Voie de paiement</h4>
                            <div class="checkout__input__checkbox">
                                <input type="radio" name="IDVPAIEMENT" value="MAG">
                                <label for="">MAGASIN</label><br>
                                <input type="radio" name="IDVPAIEMENT" value="TEL">
                                <label for="">TELEPHONE</label><br>
                            </div><br>
                            <h4>Mode de paiement</h4>
                            <div class="checkout__input__checkbox">
                                <input type="radio" name="IDPAIEMENT" value="CHQ">
                                <label for="">CHÈQUE</label><br>
                                <input type="radio" name="IDPAIEMENT" value="CSH">
                                <label for="">CASH</label><br>
                                <input type="radio" name="IDPAIEMENT" value="MOM">
                                <label for="">MOBILE MONEY</label><br>
                            </div>
                                
                               
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Votre Commande</h4>
                                <div class="checkout__order__products">Total <span>Produits</span></div>
                                <ul>
                                    <li>Graines de Nigelle <span>15000 FCFA</span></li>
                                    <li>Gel d'Aloes <span>30000 FCFA</span></li>
                                    <li>Ginseng <span>5000 FCFA</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Sous-Total <span>50000 FCFA</span></div>
                                <div class="checkout__order__total">Total <span>50000 FCFA</span></div>
                                <div class="checkout__input__checkbox">
                                </div>
                                <button type="submit" class="site-btn">VALIDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->


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