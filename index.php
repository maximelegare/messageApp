<?php
// if (!isset($_COOKIE["token"])):
//     header("Location: login.php");
// else :
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
        <!-- <link rel="stylesheet" href="./css/variables.css"> -->
        
    </head>

    <body>
        <?php include("./components/layout/header.php") ?>
        <main>
            <div class="container">
                <div class="container_form">
                    <h3>Entrez un message!</h3>
                    <form action="./contacter.php" method="POST">
                        <input type="text" name="name" placeholder="name">
                        <input type="email" name="email" placeholder="email">
                        <textarea name="message" placeholder="enter a message" rows="8" cols="50"></textarea>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </main>
        <?php // include("./components/layout/footer.php") 
        ?>
    </body>

    </html>

<?php
// endif;
?>