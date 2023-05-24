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
    <!-- <link rel="stylesheet" href="./css/variables.css"> -->
    <?php include("./utils/getTheme.php") ?>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php include("./components/layout/header.php") ?>
    <div class="afficher-messages flex justify-center mt-20">
        <div class="container card shadow-xl w-42 flex">

            <div class="p-8">

                <h3 class="text-xl font-semibold mb-4 uppercase">Liste de messages:</h3>
                <?php include("./utils/afficherMessagesLogic.php") ?>
                <?php include("./utils/phpMyAdmin.php") ?>

            </div>
        </div>

    </div>
    <?php // include("./components/layout/footer.php") 
    ?>
</body>


</html>