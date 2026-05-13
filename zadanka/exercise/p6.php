
<?php
$polaczenie = mysqli_connect("localhost", "root", "", "php_practice");

$user_id = $_POST['user_id'];
$title = $_POST['title'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$due_date = $_POST['due_date'];

$sql ="INSERT INTO exercises VALUES (NULL, '$user_id','$title','$subject','$description', '$due_date',  DEFAULT)";
mysqli_query($polaczenie, $sql);