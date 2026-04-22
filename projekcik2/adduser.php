<?php

$polaczenie = mysqli_connect("localhost","root","", "projekcik2");

$imie = $_POST['imie'];
$wiek = $_POST['wiek'];
$zgoda = $_POST['zgoda'];




if($zgoda == "on"){
    $zgoda = 1;
}else{
    $zgoda = 0;
}

$sql = "INSERT INTO users VALUES (NULL, '$imie', $wiek, $zgoda)";

mysqli_query($polaczenie, $sql);
header("Location: index.php");