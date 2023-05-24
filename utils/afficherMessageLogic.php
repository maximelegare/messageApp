<?php
require("./utils/phpMyAdmin.php");

$url = $_GET["url"];


$sql = "SELECT * FROM commentaires WHERE id = $url";

    
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['message'];
};


