<?php
session_start();


if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: index.php");
    exit;
}


function validateEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("$email is a valid email address");
        return true;
    } else {
        echo ("$email is not a valid email address");
        return false;
    }
};
// https://www.w3schools.com/php/filter_validate_email.asp



function deleteDocument($id)
{
    
    include("./phpMyAdmin.php");

    $sql = "DELETE FROM commentaires  WHERE id = :id";


    $stm = $pdo->prepare($sql);
    $stm->execute(
        array(
            ":id" => $id
        )
    );

    header("Location: ../admin.php");

};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
  

    deleteDocument($id);
};

//https://stackoverflow.com/questions/35794425/date-to-milliseconds-in-php



