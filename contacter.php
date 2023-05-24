<?php
session_start();

// $isAdmin = false;
// if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
//     $isAdmin = true;
// };


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



function createFile($obj)
{
    $name = $obj->name;
    $email = $obj->email;
    $message = $obj->message;
    include("./utils/phpMyAdmin.php");

    $sql = "INSERT INTO commentaires (nom, courriel, message) VALUES (:nom, :courriel, :message)";


    $stm = $pdo->prepare($sql);
    $stm->execute(
        array(
            ":nom" => $name,
            ":courriel" => $email,
            ":message" => $message
        )
    );

    if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
        header("Location: index.php");
        exit;
    }else{
        header("Location: admin.php");
    }



    // $encode_obj = json_encode($obj);
    // date_default_timezone_set("America/New_York");
    // $timeStamp  = date("Y-m-d__H-i-s");


    // $test = "./data/test.txt";

    // $filename = "./data/" . $timeStamp . ".txt";

    // $filename = iconv("UTF-8", "ISO-8859-1", $filename);

    // $filepath = fopen($filename, 'a') or die("Incapable de creer le fichier");

    // $res = fwrite($filepath, $encode_obj);

    // fclose($filepath);

    // if ($res) {
    //     echo "Le fichier a ete créé";
    //     header("Location: afficherMessages.php");
    //     die();
    // } else {
    //     echo "Une erreur s'est produite";
    // }
};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $tName = trim($name);
    $tEmail = trim($email);
    $tMessage = trim($message);



    if (validateEmail($tEmail) === false) {
        echo "Please enter a valid email";
        return;
    };





    $obj = new Message($tName, $tEmail, $tMessage);

    createFile($obj);
};

//https://stackoverflow.com/questions/35794425/date-to-milliseconds-in-php



class Message
{
    public  $name;
    public  $email;
    public  $message;
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->name;
    }

    public function getMessage()
    {
        return $this->name;
    }
};
