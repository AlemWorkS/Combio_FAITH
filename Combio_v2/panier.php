<?php
    
    include_once("connexion.php");
    include 'update_totals.php';

    //Supprimer les produits
    //Si la variable del existe
    if(isset($_GET['del'])){
        $id_del = $_GET['del'];
        //Suppression
        unset($_SESSION['panier'][$id_del]);
    }
    

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="panier.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body >

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
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        
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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    <h2>Panier d'Achat</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Accueil</a>
                            <span>Panier d'Achat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Nom</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>Supprimer</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $ids = array_keys($_SESSION['panier']);
                                $totalSousTotal = 0;

                                if (empty($ids)) {
                                    echo "<tr><td colspan='6'>Votre panier est vide</td></tr>";
                                } else {
                                $produits = mysqli_query($conn, "SELECT * FROM produits WHERE refproduits IN (".implode(',',$ids).")");
            
                                foreach ($produits as $produit): 
                                    $total = $_SESSION['panier'][$produit['refproduits']] * $produit['prixvente'];
                                    $totalSousTotal += $total;
                            ?>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/<?= $produit['image'] ?>" alt="">
                                    <h5><?= $produit['libelle'] ?></h5>
                                </td>
                                <td class="shoping__cart__total">
                                    <?= $produit['prixvente'] ?> FCFA
                                </td>
                                 <td class="shoping__cart__total">
                                    <div class="shoping__cart__quantity">
                                        <button class="quantity-button" data-action="decrease" data-id="<?= $produit['refproduits'] ?>">-</button>
                                        <span data-id="<?= $produit['refproduits'] ?>"><?= $_SESSION['panier'][$produit['refproduits']] ?></span>
                                        <button class="quantity-button" data-action="increase" data-id="<?= $produit['refproduits'] ?>">+</button>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    <?= $total ?> FCFA
                                </td>
                                <td>
                                    <a href="panier.php?del=<?= $produit['refproduits'] ?>">Supprimer</a>
                                </td>
                            </tr>
                            <?php endforeach;
                            }?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="./index.php" class="primary-btn cart-btn">CONTINUER LES ACHATS</a>
                </div>
                <div class="col-lg-6">
                    
                    <div class="shoping__checkout">
                        <h5>Total du Panier</h5>
                            <ul>
                                <?php if (empty($ids)) : ?>
                                <li>Votre panier est vide</li>
                                <?php else : ?>
                                <li>Sous-Total <span id="sous-total"><?= number_format($totalSousTotal, 0, '.', ' ') ?> FCFA</span></li>
                                <li>Total <span id="total"><?= number_format($totalSousTotal, 0, '.', ' ') ?> FCFA</span></li>
                                <?php endif; ?>
                            </ul>
                            <a href="./log/log.php" class="primary-btn" name="payer">PAYER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script>
        $(document).ready(function() {
            $(".quantity-button").on("click", function() {
                var action = $(this).data("action");
                var productId = $(this).data("id");
                
                var currentQuantity = parseInt($("span[data-id='" + productId + "']").text());

                if (action === "increase") {
                    currentQuantity++;
                } else if (action === "decrease" && currentQuantity > 1) {
                    currentQuantity--;
                }

                $("span[data-id='" + productId + "']").text(currentQuantity);

                updateTotals(productId, currentQuantity);
            });

            function updateTotals(productId, quantity) {
                $.ajax({
                    url: "update_totals.php", // Chemin vers le fichier PHP de mise à jour
                    type: "POST",
                    data: { productId: productId, quantity: quantity },
                    success: function(data) {
                        var response = JSON.parse(data);
                        if (response.success) {
                            $("#sous-total").text(response.sousTotal + " FCFA");
                            $("#total").text(response.total + " FCFA");
                        }
                    }
                });
            }
        });
</script>




</body>

</html>