<?php


session_start();

if (!isset($_SESSION["connected"]) || $_SESSION["connected"] !== true) {

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
    <main class="flex w-full justify-center items-center pt-20">
        <div class="card p-10 w-96 bg-base-100 shadow-xl">
            <div class="container_form">
                <h3 class="text-xl font-semibold mb-4 uppercase">Changez le theme</h3>
                <form action="./switchTheme.php" method="post" class="flex items-center gap-3">

                    <div class="flex gap-1">
                        <label for="purple">purple</label>
                        <input <?php getCheckedValue("purple"); ?> type="radio" name="theme" value="purple" class="radio">

                    </div>

                    <div class="flex gap-1">

                        <label for="green">green</label>
                        <input <?php getCheckedValue("green")
                                ?> type="radio" name="theme" value="green" class="radio">
                    </div>
                    <input type="submit" name="submit" value="Changer le Theme" class="btn btn-sm bg-black" style="background-color:var(--primary);" />
                </form>
            </div>
        </div>
    </main>
    <?php // include("./components/layout/footer.php") 
    ?>
</body>

</html>



<?php



function getCheckedValue($value)
{
    $theme = "";
    if (isset($_COOKIE["theme"])) {
        $theme = $_COOKIE["theme"];
    }


    if (!$theme && $value === "green") {
        echo "checked";
    } elseif ($theme === $value) {
        echo "checked";
    } else {
    }
};


?>