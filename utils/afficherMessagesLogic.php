<?php
require("./utils/phpMyAdmin.php");

function createEl($row)
{

    // Vérifier si l'élément est un dossier ou un fichier

    $url = urldecode($row['id']);

    $a = "<a href='./afficherMessage.php?url={$url}'>{$row['date_TIMEONLY']}</a><br/>";
    $li =  "<li class='text-sm'>$a</li>";
    $hidden = "<input type='text' name='id' hidden value={$row['id']}>";
    $div =
        "<form action='./utils/deleteMessageAdminLogic.php' method='POST' class='card shadow-md py-2 px-4  mb-2'>
            $hidden
            <div class='flex justify-between items-center mb-3'>
                
                <div class='text-sm font-semibold'>{$row['courriel']}</div>
                <div class='text-sm'>{$row['date_TIMEONLY']}</div>
            </div>
            <div class=''>{$row['message']}</div>
        </form>";
    return $div;
};


$nav_list = "<ul>";


$sql = "SELECT 
    id,
    DATE_FORMAT(date, '%Hh%i') as date_TIMEONLY,
    message,
    courriel
     FROM commentaires";



$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $nav_list .=  createEl($row);
};


$nav_list .= "</ul>";
echo $nav_list;
