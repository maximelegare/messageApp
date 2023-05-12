<?php
function createEl($addr)
{



    // Vérifier si l'élément est un dossier ou un fichier
    if (is_dir($addr)) {

        return "<li style='display:none'></li>";
    } else {
        $url = urldecode("./data/" . "$addr");

        $a = "<a href='./afficherMessage.php?url={$url}'>{$addr}</a><br/>";
        $li =  "<li class='card py-2 px-4 shadow-md mb-2 w-fit'>" . $a . "</li>";

        return $li;
    }
};

// Récupérer le dossier courant
$dossier_courant = './data';
// Ouvrir le dossier
$pointeur_dossier = opendir($dossier_courant);
// Parcourir les fichiers et dossiers du dossier courant
$nav_list = "<ul>";


do {
    // Ignorer les dossiers '.' et '..'
    if ($dossier_courant == '.' || $dossier_courant == '..' || $dossier_courant == "") {
        continue;
    };

    $nav_list .=  createEl($dossier_courant);
} while (($dossier_courant = readdir($pointeur_dossier)) !== false);
// Fermer le pointeur du dossier
closedir($pointeur_dossier);
$nav_list .= "</ul>";
echo $nav_list;
