<?php
$conn = mysqli_connect("localhost", "root", "", "mysqli_examplee");

$nazwa = $_POST['nazwa'];
$email = $_POST['email'];
$haslo = $_POST['haslo'];
$sql = "INSERT INTO uzytkownicy(nazwa, email, haslo) VALUES ('$nazwa', '$email', '$haslo')";
mysqli_query($conn, $sql);

