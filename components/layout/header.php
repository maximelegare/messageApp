<?php

?>

<style>
    @import "./css/layout/header.css";
</style>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<header class="flex justify-center shadow-xl">
    <div class="container flex justify-between items-center h-16">
        <h3>
            <a href="./index.php" class="text-white font-semibold uppercase text-xl">
                Maxime Légaré
            </a>
        </h3>
        <ul class="flex gap-2">
            <li class="btn btn-sm bg-transparent border-white"><a href="./index.php"><span class="material-symbols-outlined">
                        home
                    </span>
                </a></li>
            <li class="btn btn-sm bg-transparent border-white"><a href="./afficherMessages.php">Afficher les Messages</a></li>
            <li class="btn btn-sm bg-transparent border-white"><a href="./theme.php">Theme</a></li>
            <form method="post">
                <li class="">
                    <button class="btn btn-sm inline border-white" type="submit" name="logout" id="test" value="RUN" style="background-color:var(--primary-dark);">Logout</button>
                </li>
            </form>
        </ul>
    </div>
</header>


<?php

function logout()
{
    session_destroy();
    header("Location: login.php");
}

if (array_key_exists('logout', $_POST)) {
    logout();
}

// https://stackoverflow.com/questions/32824360/run-php-function-on-button-click

?>