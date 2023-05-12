<?php
if (!isset($_COOKIE["theme"])):
    header("Location: login.php");
else :
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="./css/pages/index.css">
        <?php include("./pageLogic/getTheme.php") ?>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- <link rel="stylesheet" href="./css/variables.css"> -->
        
    </head>

    <body>
        <?php include("./components/layout/header.php") ?>
        <main class="flex justify-center">
            <div class="container flex justify-center">
                <div class="flex flex-col">
                    <h3>Entrez un message!</h3>
                    <form action="./contacter.php" method="POST" class="flex flex-col items-center gap-2">
                        <input type="text" name="name" placeholder="name" class="input input-bordered block w-full">
                        <input type="email" name="email" placeholder="email" class="input input-bordered block w-full">
                        <textarea name="message" placeholder="enter a message" rows="8" cols="50" class="textarea textarea-bordered block"></textarea>
                        <input type="submit" name="submit" class="btn w-24">
                    </form>
                </div>
            </div>
        </main>
        <?php // include("./components/layout/footer.php") 
        ?>
    </body>

    </html>

<?php
endif;
?>