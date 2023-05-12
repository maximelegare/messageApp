<?php $theme;

if(isset($_COOKIE["theme"])){
    $theme = $_COOKIE["theme"];
}else{
    $theme = "light";
}

 ?>
<link rel="stylesheet" href="./css/<?php echo $theme; ?>.css">