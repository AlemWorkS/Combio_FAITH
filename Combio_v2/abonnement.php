<?php
include 'connexion.php';

?>
<!DOCTYPE html>
<html lang="Français">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abonnement</title>

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

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "post"){

            $email = $_POST["email"];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)){

                $sujet = "Confirmation d'abonnement";
                $message = " Votre abonnement au bulletin d'informations de Combio a été effectué avec succès !";
                $expediteur = "danouetsa02@gmail.com";  //Adresse de l'entreprise
                $headears = 'From: ' . $expediteur . "\r\n" .
                'Reply-To: ' . $expediteur . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

                if (mail($email, $sujet, $message, $headears)){
                    echo "Un email de confirmation a été envoyé à l'adresse : " . $email;
                }
                else{
                    echo "Erreur lors de l'envoi de l'email.";
                }

            }
            else{
                echo "L'adresse email saisie n'est pas valide.";
            }

        }
    ?>

</body> 
</html>   