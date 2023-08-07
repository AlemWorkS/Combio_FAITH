<?php
include 'connexion.php';
include 'ajouter_panier.php';

?>
<!DOCTYPE html>
<html lang="Français">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Combio</title>

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
                            <li class="active"><a href="./index.php">Accueil</a></li>
                            <li><a href="./index.php#Ventes">Produits</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <!-- Afficher le nombre de produits dans le panier -->
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
    <section class="hero">
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
                                <input type="text" id="motRecherche" name="motRecherche" placeholder="Que voulez vous?">
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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                    <div class="hero__text">
                            <h2>ComBIO <br />100% BIO</h2>
                            <p>Livraison disponible à moindre coût</p>
                            <a href="#Ventes" class="primary-btn">NOS PRODUITS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
            <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.png">
                            <h5><a href="https://www.performe.co/blog/complements-alimentaires-naturels-efficaces/#:~:text=Parmi%20eux%20%3A%20la%20spiruline%2C%20la,r%C3%A9pond%20%C3%A0%20des%20besoins%20sp%C3%A9cifiques.">Alimentation</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-6.jpeg">
                            <h5><a href="https://www.luluetguite.fr/blog/article/utiliser-gel-aloe-vera.html">Beauté</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-7.jpeg">
                            <h5><a href="https://www.bioandco.bio/10-aliments-energetiques-pour-garder-la-forme/">Energies</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpeg">
                            <h5><a href="https://www.passeportsante.net/portail/huiles-vegetales">Huiles naturelles</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpeg">
                            <h5><a href="https://www.herboristerieduvalmont.com/blog/tisane-un-guide-complet-de-ses-bienfaits-et-de-ses-utilisations-n150">Tisanes</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.avif">
                            <h5><a href="https://www.cuisineaz.com/diaporamas/recettes-a-l-ail-bonnes-pour-la-sante-1988/interne/1.aspx">Santé</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="https://www.doctissimo.fr/html/nutrition/mag_2000/mag1208/nu_3142_menus_1.htm">Régime minceur</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad" id="Ventes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nos Produits</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tout</li>
                            <li data-filter=".huiles">Huiles</li>
                            <li data-filter=".boites">Boites</li>
                            <li data-filter=".tubes">Tubes</li>
                            <li data-filter=".sachets">Sachets</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                    <?php
    
                        // Requête SQL pour récupérer les données de la table "modele"
                        $sql = "SELECT *  FROM produits";
                        $result = $conn->query($sql);

                        // Vérifier s'il y a des résultats
                        if ($result->num_rows > 0) {
                            // Parcourir les résultats et afficher les données pour chaque modèle
                            while ($row = $result->fetch_assoc()) {
                            echo'<div class="col-lg-3 col-md-4 col-sm-6 mix tubes">';
                            echo '<div class="featured__item">';
                            echo '    <div class="featured__item__pic set-bg">';
                            echo '      <img src="'.$row["image"].'" alt="" >';
                            echo '        <ul class="featured__item__pic__hover">';
                            echo '              <li><a href="ajouter_panier.php?refproduits='.$row["refproduits"].'"><i class="fa fa-shopping-cart"></i></a></li>';
                            echo '        </ul>';
                            echo '    </div>';
                            echo '    <div class="featured__item__text">';
                            echo '        <h6><a href="./shop-details.php">'. $row["libelle"] . '</a></h6>';
                            echo '        <h5>'. $row["prixvente"] .' FCFA  </h5>';
                            echo '    </div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        } else {
                            echo "Aucun produit trouvé.";
                        }
                    ?>
                </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Favoris Begin -->
    <div class="section-title">
        <h2>Ventes Spécial</h2>
    </div>
    <!-- Favoris End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Produits récents</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile d'Olive</h6>
                                        <span>7000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile5.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile à l'Ail/h6>
                                        <span>8500 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Rincin</h6>
                                        <span>6000 FCFA</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/beauté2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Gel Bio Aloe Vera</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/beauté1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Coco</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                               
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/tisane2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Anis Vert</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Produits Bas Prix</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/tisane1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tisane à la Framboise</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/tisane3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tisane de Fenugrec</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/beauté2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Gel Bio Aloe Vera</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Nigelle</h6>
                                        <span>6000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile4.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Rincin</h6>
                                        <span>6000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile d'Argan</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Produits Très Demandés</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/beauté2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Gel Bio Aloe Vera</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/beauté1.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Coco</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/tisane2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Anis Vert</h6>
                                        <span>5000 FCFA</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile6.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile d'Olive</h6>
                                        <span>7000 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile3.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile d'Argan</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/huile2.png" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Huile de Fenugrec</h6>
                                        <span>6500 FCFA</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/sidebar/nigelle.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 27 Avril 2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="https://www.femmeactuelle.fr/sante/medecine-douce/quels-sont-les-bienfaits-du-ginseng-2093866">Les bienfaits du Panax Ginseng </a></h5>
                            <p> Le ginseng booste les capacités physiques et améliore les capacités intellectuelles. 
                                Il permet de s'adapter au stress et de réguler les dysfonctionnements... </p>                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/ail.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>16 Décembre 2016</li>
                                        <li><i class="fa fa-comment-o"></i> 10</li>
                                    </ul>
                                    <h5><a href="https://www.cuisineaz.com/diaporamas/recettes-a-l-ail-bonnes-pour-la-sante-1988/interne/1.aspx">15 recettes à l'ail bonnes pour la santé</a></h5>
                                    <p> Potimarron au four. <br />
                                        Parmentier de saumon à l'ail et au persil. <br />
                                        Poulet rôti à l'ail et au citron. <br />
                                        Crème... </p>
                                </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
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