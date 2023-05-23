<?php
require("./utils/phpMyAdmin.php");

function createEl($row)
{


    // Vérifier si l'élément est un dossier ou un fichier
    
        $url = urldecode($row['id']);

        $a = "<a href='./afficherMessage.php?url={$url}'>{$row['date']}</a><br/>";
        $li =  "<li class='card py-2 px-4 shadow-md mb-2 w-fit'>" . $a . "</li>";

        return $li;
    
};


$nav_list = "<ul>";


$sql = "SELECT * FROM commentaires";

    

$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $nav_list .=  createEl($row);
};


$nav_list .= "</ul>";
echo $nav_list;
