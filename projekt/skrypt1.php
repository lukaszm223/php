<?php 

$polaczenie = mysqli_connect("localhost", "root", "", "przewozy");

$zadanie = $_POST['id_zadania'];
$sql = "DELETE FROM zadania WHERE zadanie = $zadanie";


mysqli_query($polaczenie, $sql);

header("Location: przewozy.html");
    