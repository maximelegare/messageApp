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
    <main class="flex w-full justify-center items-center pt-20">
        <div class="card p-10 w-96 bg-base-100 shadow-xl">
            <div>
                <h3>Login</h3>
                <form action="./pageLogic/loginLogic.php" method="POST">
                    <input class="input input-sm input-bordered " type="password" name="password" placeholder="password">
                    <input class="btn btn-sm w-fit" type="submit" name="submit" style="background-color:var(--primary);">
                </form>
            </div>
        </div>
    </main>
    <?php // include("./components/layout/footer.php") 
    ?>
</body>

</html>