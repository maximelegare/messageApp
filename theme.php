<?php

// if(isset($_COOKIE["theme"])):

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include("./pageLogic/getTheme.php") ?>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>




<body>
    <?php include("./components/layout/header.php") ?>
    <main class="flex w-full justify-center items-center pt-20">
        <div class="card p-10 w-96 bg-base-100 shadow-xl">
            <div class="container_form">
                <h3>Entrez un message!</h3>
                <form action="./switchTheme.php" method="post">
                    <label for="dark">Dark</label>
                    <input <?php getCheckedValue("dark"); ?> type="radio" name="theme" value="dark" class="radio">

                    <label for="light">Light</label>
                    <input <?php getCheckedValue("light")
                            ?> type="radio" name="theme" value="light" class="radio">
                    <input type="submit" name="submit" value="Changer le Theme"  class="btn btn-sm btn-dark"/>
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


    if (!$theme && $value === "light") {
        echo "checked";
    } elseif ($theme === $value) {
        echo "checked";
    } else {
    }
};

?>