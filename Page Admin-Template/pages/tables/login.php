<?php
$nom_serveur="localhost";
$utilisateur="root";
$mdp="jojo225@";
$bd="combio";

$con = new mysqli($nom_serveur,$utilisateur,$mdp,$bd);

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if(isset($_POST['Username'])&& isset($_POST['mdp'])){ //On verifie ici si l'utilisateur a rentre des informations
    
    
    $Username =$_POST['Username'];
    $motdepasse =$_POST['mdp'];
    echo $nomutilisateur;
   //Nous allons verifier si les informations entree sont correctes
      //Connexion a la base de donnee 
  //requete pour selectionner l'utilisateur qui a pour nom et mot de passe les identifiants qui ont ete entrees
  $req=mysqli_query($con,"SELECT (NOMUSER,MOTDEPASSE)
  FROM utilisateur WHERE NOMUSER='$Username' AND MOTDEPASSE='$motdepasse'
  ");
  $num_ligne =mysqli_num_rows($req);//Compter le nombre de ligne ayant rapport a la requette SQL
 
}else{ //si non
      echo "Nom ou Mots de passe incorrectes !";
 }

?>