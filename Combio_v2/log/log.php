<?php
session_start(); // Démarre la session

include '../connexion.php';

if (isset($_POST["connexion"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mdp = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Récupérer les données de l'utilisateur
        $row = $result->fetch_assoc();

        // Stocker les valeurs dans des variables de session
        $_SESSION["nom"] = $row["Nom"];
        $_SESSION["prenom"] = $row["Prenom"];
        $_SESSION["numero"] = $row["telephone"];
		$_SESSION["status"] = $row["status"];

        // Rediriger l'utilisateur vers la page appropriée
        if ($_SESSION["status"] == "admin") {
            //Chemin de la page admin
            echo 'Administrateur';
            // header("Location: ../admin.php"); 
        } else {
            header("Location: ./checkout.php");
        }
        exit();
    } else {
        echo "Identifiants invalides. Veuillez réessayer.";
    }
}

//Insertion user

if (isset($_POST["inscription"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $telephone = $_POST["telephone"];

    // Vous devriez ajouter des vérifications supplémentaires (par exemple, si l'email est unique) avant d'insérer les données dans la base de données.

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, telephone, status) VALUES ('$nom', '$prenom', '$email', '$password', '$telephone', 'user')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}

//Insertion Clients

if (isset($_POST["inscription"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ville = $_POST["ville"];
    $telephone = $_POST["telephone"];
    $parrain = $_POST["parrain"];

    // Vous devriez ajouter des vérifications supplémentaires (par exemple, si l'email est unique) avant d'insérer les données dans la base de données.

    $sql = "INSERT INTO clients (nom, prenoms, ville, contact,  id_parrain) VALUES ('$nom', '$prenom', '$ville', '$telephone', '$parrain')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion / Inscription</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Créer un compte</h1>
			<input type="nom" name="nom" placeholder="Nom" />
			<input type="prenom" name="prenom" placeholder="Prenom" />
            <input type="ville" name="ville"placeholder="Ville" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="telephone" name="telephone" placeholder="telephone" />
            <label for="parrain">Parrain : </label><select name="parrain" id="parrain">
                    <option value="2K">Wantche</option>
                    <option value="ScottBaybi">Deba</option>
		            <option value="waa">Le</option>
            </select>
			<button type="submit" name="inscription">S'inscrire</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Connexion</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="connexion">Se connecter</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenue</h1>
				<button class="ghost" id="signIn">Se connecter</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour, Mr/Mme</h1>
				<button class="ghost" id="signUp">S'inscrire</button>
			</div>
		</div>
	</div>
</div>

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
