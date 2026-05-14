<?php

$polaczenie = mysqli_connect("localhost", "root", "", "php_practice");

$user_id = $_POST['user_id'];
$sql = "DELETE FROM users WHERE id = $user_id";

mysqli_query($polaczenie, $sql);
header("Location: ../index.php");