<!DOCTYPE html>
<html lang="Français">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Résultat de la recherche</title>

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
        $url = './blog.php';
        $page_content = file_get_contents($url);
        $mot = $_POST["motRecherche"]; //Le mot à rechercher

        if (strpos($page_content, $mot) !== false) {
            //Si le mot est trouvé, filtrer les éléments correspondants
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($page_content);
            libxml_clear_errors();

            $xpath = new DOMXPath($dom);
            //Utilisation de XPath pour trouver les éléments contenant le mot recherché
            $elements = $xpath->query("//*[contains(text(), '$mot')]");

            //Afficher les éléments trouvés
            foreach($elements as $element){
                echo $dom->saveHTML($element) . '<br>';
            }
        }
        else{
            echo 'Le mot recherché n\'a pas été trouvé sur ce blog.';
        }
    ?>    

</body>
</html>