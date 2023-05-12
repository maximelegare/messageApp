<?php


    $password = "123456";
    $user = "max";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userPswrd = $_POST['password'];
        

        if($userPswrd === $password){
            setcookie("theme", uniqid(), time() + (60 * 60 * 24 * 30));
            header("Location: ../index.php");
        }
        else{
            header("Location: ../login.php");
        };
    }

