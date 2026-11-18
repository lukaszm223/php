<?php
$conn = mysqli_connect("localhost", "root", "", "islandia");
$sql = "SELECT nazwa FROM obiekty WHERE panstwo = 'Islandia' AND idRodzaj = 14";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc(($result))){
    echo "<li>{$row['nazwa']}</li>";
}