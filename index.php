<?php
    define('view', "view/"); //définir les dossiers principaux dans des valeurs globales
    define('controllers', "controllers/");
    require view."header.php"; //inclure ce qui va entrourer le site
    if (isset($_GET['action'])) {  //affichage des différentes pages si les conditions sont remplies
        if ($_GET['action'] == "presentation") {
            require controllers."presentation.php";
            $page = new presentation();
        }
        elseif ($_GET['action'] == "stock") {
            require controllers."stock.php";
            $page = new stock();
        }
        elseif ($_GET['action'] == "contact") {
            require controllers."contact.php";
            $page = new contact();
        }
    }
    else {
        require controllers."welcomePage.php";
        $page = new welcome();
    }
    $page->run();
    require view."footer.php";
?>
