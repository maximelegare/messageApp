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
    <!-- <link rel="stylesheet" href="./css/variables.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php include("./components/layout/header.php") ?>
    <div class="flex justify-center">
        <div class="container flex justify-center card p-10 shadow-xl w-96 mt-20">
            <div class="container_list">
            <h3 class="text-xl font-semibold mb-4 uppercase">Message:</h3>
                <?php include("./utils/afficherMessageLogic.php") ?>
                
            </div>
        </div>

    </div>
    <?php // include("./components/layout/footer.php") 
    ?>
</body>


</html>


<?php

if (isset($_COOKIE["loggedIn"])) {
    header("Location: login.php");
} else {
    return false;
}

?>