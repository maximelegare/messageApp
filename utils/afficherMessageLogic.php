<?php

$url = $_GET["url"];


$myfile = fopen($url, "r") or die("Unable to open file!");


echo fread($myfile, filesize($url));
fclose($myfile);

