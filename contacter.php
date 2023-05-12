

<?php

function validateEmail($email)
{
    $check1 = strpos($email, "@");
    $check2 = strpos($email, ".");


    return ($check1 === false && $check2 === false && $check2 > $check1);
};


function createFile($obj)
{

    $encode_obj = json_encode($obj);
    date_default_timezone_set("America/New_York");
    $timeStamp  = date("Y-m-d__H-i-s");


    $test = "./data/test.txt";

    $filename = "./data/" . $timeStamp . ".txt";

    $filename = iconv("UTF-8", "ISO-8859-1", $filename);

    $filepath = fopen($filename, 'a') or die("Incapable de creer le fichier");

    $res = fwrite($filepath, $encode_obj);

    fclose($filepath);

    if ($res) {
        echo "Le fichier a ete créé";
        header("Location: afficherMessages.php");
        die();
    } else {
        echo "Une erreur s'est produite";
    }


};


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $tName = trim($name);
    $tEmail = trim($email);
    $tMessage = trim($message);



    // if (validateEmail($tEmail) === false) {
    //     echo "Please enter a valid email";
    // };

    //https://stackoverflow.com/questions/1725907/check-if-a-string-is-an-email-address-in-php



    $obj = new Message($tName, $tEmail, $tMessage);
    createFile($obj);
};

//https://stackoverflow.com/questions/35794425/date-to-milliseconds-in-php



class Message
{
    public function __construct($name, $email, $message)
    {
        $this->$name = $name;
        $this->$email = $email;
        $this->$message = $message;
    }
};
