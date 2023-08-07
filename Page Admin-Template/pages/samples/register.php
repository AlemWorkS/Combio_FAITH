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
if(isset($_POST['username'])&& isset($_POST['mdp'])&&(isset($_POST['prénoms'])&& isset($_POST['nom']))){ //On verifie ici si l'utilisateur a rentre des informations
    
    
    $Username =$_POST['username'];
    $motdepasse =$_POST['mdp'];
    $prenom =$_POST['prénoms'];
    $motdepasse =$_POST['mdp'];
    $nom =$_POST['nom'];
   
    
   //Nous allons verifier si les informations entree sont correctes
      //Connexion a la base de donnee 
  //requete pour selectionner l'utilisateur qui a pour nom et mot de passe les identifiants qui ont ete entrees
  
  try{
    $sql1="INSERT INTO utilisateur(NOMUSER,MOTDEPASSE,PRENOMS,NOM) 
                          VALUES ('$Username','$motdepasse','$prenom','$nom')";
                          mysqli_query($chaineConnexion,$sql1);
    
    header("Location:login.html");
    }catch (Exception $e){
       echo $e;
    }
}

?>