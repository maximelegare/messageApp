<style>
    @import "./css/layout/header.css";
</style>

<header>
    <div class="container">
        <h3>
            <a href="./index.php">
                Maxime Légaré
            </a>
        </h3>
        <ul class="container_links">
            <li class="container_links_link"><a href="./afficherMessages.php">Afficher les Messages</a></li>
            <li class="container_links_link"><a href="./index.php">Contacter</a></li>
            <li class="container_links_link"><a href="./theme.php">Theme</a></li>
            <li class="container_links_link"><a href="./login.php">Login</a></li>
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