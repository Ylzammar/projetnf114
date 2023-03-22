<?php
    // Récupérer le mot entré par l'utilisateur
    $mot = $_GET["mot"];

    // Vérifier si le mot est un palindrome ou pas
    if ($mot == strrev($mot)) {
        echo "Le mot ".$mot." est un palindrome !";
    } else {
        echo "Le mot ".$mot." n'est pas un palindrome.";
    }
?>
