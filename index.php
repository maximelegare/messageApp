<?php 
session_start();

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
        <div class="w-1/3">
            <div class="flex flex-col p-10 shadow-xl card w-full">
                <h3 class="text-xl font-semibold mb-4 uppercase">Entrez un message</h3>
                <form action="./contacter.php" method="POST" class="flex flex-col items-center gap-2">
                    <input type="text" name="name" placeholder="name" class="input input-bordered input-sm block w-full">
                    <input type="email" name="email" placeholder="email" class="input input-sm input-bordered block w-full">
                    <textarea name="message" placeholder="enter a message" rows="3"  class="textarea textarea-bordered block w-full"></textarea>
                    <input type="submit" name="submit" class="btn w-24 btn-sm" style="background-color:var(--primary);">
                </form>
            </div>
            <div class="container flex justify-center w-full p-10 shadow-xl card">
                <div class="flex flex-col">
                    <h3 class="text-xl font-semibold mb-4 uppercase">Messages:</h3>
                    <?php include("./utils/afficherMessagesLogic.php") ?>
                </div>
            </div>
        </div>
    </main>

</body>

</html>