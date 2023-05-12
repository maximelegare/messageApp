<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="./css/variables.css"> -->
    <?php include("./pageLogic/getTheme.php") ?>
    <link rel="stylesheet" href="./css/pages/afficherMessages.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <?php include("./components/layout/header.php") ?>
    <div class="afficher-messages flex justify-center mt-20">
        <div class="container card shadow-xl w-42 flex">

            <h3>Liste de Messages:</h3>
            <?php include("./pageLogic/afficherMessagesLogic.php") ?>

        </div>

    </div>
    <?php // include("./components/layout/footer.php") 
    ?>
</body>


</html>