<?php

$polaczenie = mysqli_connect("localhost", "root", "", "przewozy");

$zadanie = $_POST['zadanie'];
$data = $_POST['data'];

$sql = "INSERT INTO zadania VALUES (NULL, '$zadanie', $data)";
header("Location: przewozy.html");