<?php
require("./utils/phpMyAdmin.php");

function createEl($row)
{

    // Vérifier si l'élément est un dossier ou un fichier

    $url = urldecode($row['id']);

    $a = "<a href='./afficherMessage.php?url={$url}'>{$row['date']}</a><br/>";
    $li =  "<li class='text-sm'>$a</li>";
    $button = "<input class='btn btn-error bg-red-500 btn-sm text-white' type='submit' value='delete'>";
    $hidden = "<input type='text' name='id' hidden value={$row['id']}>";
    $div =
        "<form action='./utils/deleteMessageAdminLogic.php' method='POST' class='card shadow-md py-2 px-4  mb-2'>
            $hidden
            <div class='flex justify-between items-center'>
                <div class='flex flex-col gap-3'>
                    <div>
                        <h3 class='font-semibold text-sm opacity-60'>Courriel:</h3>
                        <div class=''>{$row['courriel']}</div>
                    </div>
                    <div>
                        <h3 class='font-semibold text-sm opacity-60'>Date:</h3>
                        <div class=''>{$row['date']}</div>
                    </div>
                    <div>
                        <h3 class='font-semibold text-sm opacity-60'>Message:</h3>
                        <div class=''>{$row['message']}</div>
                    </div>
                </div>
                <div class='place-self-start'>
                    $button
                </div>
            </div>
        </form>";
    return $div;
};


$nav_list = "<ul>";


$sql = "SELECT * FROM commentaires";



$result = $pdo->query($sql);



while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $nav_list .=  createEl($row);
};


$nav_list .= "</ul>";
echo $nav_list;
