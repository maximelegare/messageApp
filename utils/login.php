<?php
$adminUser = "admin";
$adminPassword = "123456";
$user = "max";
$password = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $userPswrd = $_POST['password'];

    if ($username === $adminUser && $userPswrd === $adminPassword) {
        session_start();

        $_SESSION["connected"] = true;
        $_SESSION["admin"] = true;

        header("Location: ../admin.php");
    } else if ($username === $user && $userPswrd === $password) {
        echo("normal");
        session_start();

        $_SESSION["connected"] = true;

        header("Location: ../index.php");
    } else {
        header("Location: ../login.php");
    };
}

