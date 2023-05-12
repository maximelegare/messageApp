

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./css/pages/index.css">
    <?php  include("./pageLogic/getTheme.php") ?>
    <!-- <link rel="stylesheet" href="./css/variables.css"> -->
</head>

<body>
    <?php include("./components/layout/header.php") ?>
    <main>
        <div class="container">
            <div class="container_form">
                <h3>Login</h3>
                <form action="./pageLogic/loginLogic.php" method="POST">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </main>
    <?php // include("./components/layout/footer.php") ?>
</body>

</html>

