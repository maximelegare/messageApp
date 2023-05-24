


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
    <main class="flex w-full justify-center items-center pt-20">
        <div class="card p-10 w-96 bg-base-100 shadow-xl">
            <div>
                <h3 class="text-xl font-semibold mb-4 uppercase">Login</h3>
                <form class="flex flex-col items-center gap-2" action="./utils/login.php" method="POST">
                    <input class="input input-sm input-bordered  w-full" type="text" name="username" placeholder="Username (max / admin)">
                    <input class="input input-sm input-bordered  w-full" type="password" name="password" placeholder="Password (123456)">
                    <input class="btn btn-sm w-fit" type="submit" name="submit" style="background-color:var(--primary);" value="login">
                </form>
            </div>
        </div>
    </main>

</body>

</html>