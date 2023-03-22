<?php
    // Récupérer le mot entré par l'utilisateur
    $mot = $_POST["mot"];

    // Vérifier si le mot est un palindrome
    if (strtolower($mot) == strtolower(strrev($mot))) {
        echo "Le mot ".$mot." est un palindrome !";
    } else {
        echo "Le mot ".$mot." n'est pas un palindrome.";
    }
?>
