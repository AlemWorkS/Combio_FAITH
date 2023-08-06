<?php
include 'connexion.php';
include 'ajouter_panier.php';

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

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
                            <div class="header__top__right__language">
                                <div>Français</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Connexion</a>
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
                            <li><a href="./shop-grid.php">Produits</a></li>
                            <li class="active"><a href="./blog.php">Blog</a></li>
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
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">

                        </div>
                        <div class="blog__sidebar__item">

                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Dernières Nouvelles</h4>
                            <div class="blog__sidebar__recent">
                                <a href="https://www.semencesdupuy.com/blog/graines-nigelle-et-cumin-differences-n35" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/nigelle.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Différences entre<br />graines de nigelle et cumin</h6>
                                        <span>27 Juin 2023</span>
                                    </div>
                                </a>
                                <a href="https://aloa-bibi.com/blogs/le-journal/4-idees-recues-sur-l-aloe-vera-en-cosmetique" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/pulpeAloes.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Aloès<br /> et Beauté</h6>
                                        <span>09 Juin 2023</span>
                                    </div>
                                </a>
                                <a href="https://ladrome.bio/blogs/le-blog/mincir" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/ail.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Ail et<br />Régime minceur</h6>
                                        <span>13 Avril 2023</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/ginseng.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 27 Avril 2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.femmeactuelle.fr/sante/medecine-douce/quels-sont-les-bienfaits-du-ginseng-2093866">Les bienfaits du Panax Ginseng </a></h5>
                                    <p> Le ginseng booste les capacités physiques et améliore les capacités intellectuelles. 
                                        Il permet de s'adapter au stress et de réguler les dysfonctionnements... </p>
                                    <a href="https://www.femmeactuelle.fr/sante/medecine-douce/quels-sont-les-bienfaits-du-ginseng-2093866" class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/ail.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>16 Décembre 2016</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.cuisineaz.com/diaporamas/recettes-a-l-ail-bonnes-pour-la-sante-1988/interne/1.aspx">15 recettes à l'ail bonnes pour la santé</a></h5>
                                    <p> Potimarron au four. <br />
                                        Parmentier de saumon à l'ail et au persil. <br />
                                        Poulet rôti à l'ail et au citron. <br />
                                        Crème... </p>
                                    <a href="https://www.cuisineaz.com/diaporamas/recettes-a-l-ail-bonnes-pour-la-sante-1988/interne/1.aspx" class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/gelAloes.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 04 Juin 2015 </li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.luluetguite.fr/blog/article/utiliser-gel-aloe-vera.html">10 Astuces beauté avec l'Aloès</a></h5>
                                    <p>Remplacer le gel pour les cheveux par du gel d'aloe vera. ...<br />
                                        Atténuer les taches brunes. ...<br />
                                        Soulager l'eczéma et le psoriasis. ... </p>
                                    <a href="https://www.luluetguite.fr/blog/article/utiliser-gel-aloe-vera.html" class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 10 Décembre 2014</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.bioandco.bio/10-aliments-energetiques-pour-garder-la-forme/">10 aliments énergétiques pour garder la forme</a></h5>
                                    <p>Amandes, noix, noisettes, figues, dattes, gingembre, raisins, abricots… 
                                        Les fruits secs et les fruits à coque sont d'excellents aliments énergétiques. 
                                        Riches en ... </p>
                                    <a href="https://www.bioandco.bio/10-aliments-energetiques-pour-garder-la-forme/" class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 11 Septembre 2018</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.doctissimo.fr/html/nutrition/mag_2000/mag1208/nu_3142_menus_1.htm">Régime minceur - Menu minceur</a></h5>
                                    <p>Menu minceur : le déjeuner et dîner<br />
                                        Midi <br />
                                        Poulet en cocotte Fenouils braisés <br />
                                        Une rondelle de pain Fromage blanc maigre </p>
                                    <a href="https://www.doctissimo.fr/html/nutrition/mag_2000/mag1208/nu_3142_menus_1.htm" class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/visuel-alimentaires-complements-internet-acheter-sites.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 11 Octobre 2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.performe.co/blog/complements-alimentaires-naturels-efficaces/#:~:text=Parmi%20eux%20%3A%20la%20spiruline%2C%20la,r%C3%A9pond%20%C3%A0%20des%20besoins%20sp%C3%A9cifiques.">10 Compléments alimentaires naturels et efficaces</a></h5>
                                    <p>Parmi eux : la spiruline, la phycocyanine, le zinc, le cuivre, la vitamine B12, les oméga 3, le ginseng, la maca, le charbon et la mélatonine… 
                                        Chacun de ces compléments à la fois naturels et efficaces répond à des besoins spécifiques. </p>
                                    <a href="https://www.performe.co/blog/complements-alimentaires-naturels-efficaces/#:~:text=Parmi%20eux%20%3A%20la%20spiruline%2C%20la,r%C3%A9pond%20%C3%A0%20des%20besoins%20sp%C3%A9cifiques." class="blog__btn">EN SAVOIR PLUS <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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