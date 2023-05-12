<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $stylesArr = array('dark', 'light');

    if (isset($_POST['theme']) && in_array($_POST['theme'], $stylesArr)) {
        $style = $_POST['theme'];
        setcookie("theme", $style, time() + (60 * 60 * 24 * 30));
    };
    header("Location: theme.php");

    
    // https://stackoverflow.com/questions/1388210/php-using-a-drop-down-list-to-change-site-theme

};

