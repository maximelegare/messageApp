<?php
session_start();

if(!isset($_SESSION["connected"]) || $_SESSION["connected"] !== true){

    header("Location: login.php");
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
        <main class="flex justify-center">
            <div class="container flex justify-center">
                <div class="flex flex-col mt-20">
                <h3 class="text-xl font-semibold mb-4 uppercase">Entrez un message</h3>
                    <form action="./contacter.php" method="POST" class="flex flex-col items-center gap-2">
                        <input type="text" name="name" placeholder="name" class="input input-bordered input-sm block w-full">
                        <input type="email" name="email" placeholder="email" class="input input-sm input-bordered block w-full">
                        <textarea name="message" placeholder="enter a message" rows="8" cols="50" class="textarea textarea-bordered block"></textarea>
                        <input type="submit" name="submit" class="btn w-24 btn-sm" style="background-color:var(--primary);">
                    </form>
                </div>
            </div>
        </main>
     
    </body>

    </html>

