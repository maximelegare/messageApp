<?php session_start();

$password = "123456";
$user = "max";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userPswrd = $_POST['password'];
    

    if($userPswrd === $password){
        // $uid = uniqid();
        // setcookie("token", $uid, time() + (60 * 60 * 24 * 30));
        // $_COOKIE["token"] = $uid;
        session_start();

        $_SESSION["connected"] = true;

        header("Location: ../index.php");
    }
    else{
        header("Location: ../login.php");
    };
}

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
    <?php include("./utils/getTheme.php") ?>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- <link rel="stylesheet" href="./css/variables.css"> -->
</head>

<body>
    <main class="flex w-full justify-center items-center pt-20">
        <div class="card p-10 w-96 bg-base-100 shadow-xl">
            <div>
                <h3>Login</h3>
                <form action="./utils/login.php" method="POST">
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