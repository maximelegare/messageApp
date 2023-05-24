<?php
session_start();

if (!isset($_SESSION["connected"]) || $_SESSION["connected"] !== true) {
    header("Location: login.php");
    exit;
} else if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: index.php");
    exit;
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo 2</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include("./utils/getTheme.php") ?>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <?php include("./components/layout/header.php") ?>
    <main class="flex flex-col items-center">
        <div class="container flex-col items-center flex">


            <div class="w-1/3">
                
                <div class="container flex justify-center w-full p-10 shadow-xl card">
                    <div class="flex flex-col">
                        <h3 class="text-xl font-semibold mb-4 uppercase">Messages:</h3>
                        <?php include("./utils/afficherMessagesAdminLogic.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>