<style>
    @import "./css/layout/header.css";
</style>

<header class="flex justify-center">
    <div class="container flex justify-between items-center h-16">
        <h3>
            <a href="./index.php">
                Maxime Légaré
            </a>
        </h3>
        <ul class="">
            <li class="btn btn-sm btn-theme"><a href="./afficherMessages.php">Afficher les Messages</a></li>
            <li class="btn btn-sm"><a href="./index.php">Contacter</a></li>
            <li class="btn btn-sm"><a href="./theme.php">Theme</a></li>
            <li class="btn btn-sm"><a href="./login.php">Login</a></li>
        </ul>
    </div>
</header>

<?php
function getIsLoggedIn($value)
{
    if(isset($_COOKIE["loggedIn"])){
        return true;
    }else{
        return false;
    }
};

?>