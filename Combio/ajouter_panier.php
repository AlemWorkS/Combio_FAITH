<?php
//inclure la page de connexion
include_once "connexion.php";

//Verifier si une session existe

if(!isset($_SESSION)){
    //Si non demarrer une session
    session_start();
}
//Créer la session
if(!isset($_SESSION['panier'])){
    //S'il n'existe pas une session on cree une session et on met un tableau à l'intérieur
    $_SESSION['panier'] = array();
}
//  echo $_GET['refproduits']
//Recupération de l'id dans le lien

if(isset($_GET['refproduits'])){
    //Si un id a été enviyé alors:
    $refproduits = $_GET['refproduits'];
    //Vérifier grace à l'id si le produit existe dans bdd
    $produit = mysqli_query($conn, "SELECT * FROM produits where refproduits = $refproduits");
    if(empty(mysqli_fetch_assoc($produit))){
        //Si ce produit n'existe pas
        die("Ce produit n'existe pas"); 
    } 
        //Ajouter le produit dans le panier (le tableau)

    if(isset($_SESSION['panier'][$refproduits])){
        $_SESSION['panier'][$refproduits]++;

    }else{
        $_SESSION['panier'][$refproduits]=1;
    }

    header("Location:index.php");

}
?>