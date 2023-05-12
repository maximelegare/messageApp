<?php
    $password = "123456";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $userPswrd = $_POST['password'];
        

        if($userPswrd === $password){
            // $uid = uniqid();
            // setcookie("token", $uid, time() + (60 * 60 * 24 * 30));
            // $_COOKIE["token"] = $uid;
            session_start();

            $_SESSION["connected"] = true;

            header("Location: ../index.php");
        }
        else{
            header("Location: ../login.php");
        };
    }

