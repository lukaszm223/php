<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="container">
        
        <form action="removeuser2.php" method="POST">
            <input type="number" name="user_id" placeholder="Podaj ID użytkownika do usunięcia">
            <button>Usuń użytkownika o ID</button>
        </form>
    </div>
        
        <h2>Forlumarz użytkownika</h2>

<?php
$polaczenie = mysqli_connect("localhost", "root", "", "projekcik2");

$sql = "SELECT * FROM users";

$wynik = mysqli_query($polaczenie, $sql);

while($wiersz = mysqli_fetch_assoc($wynik)){
    $imie = $wiersz['imie'];
    $id = $wiersz['id'];
    echo "
    <li>
    <h2>$imie</h2>
    <form action='removeuser.php' method='POST'>
        <input type='hidden' value=$id name='id'>
        <button>Usuń</button>
    </form>
    </li>
    "
    ;
}
?>


    <form action="adduser.php" method="POST">
<label for="imie">
    Podaj imię
    <input type="text" name="imie" id="name">
</label>
<label for="wiek">
    Podaj wiek
    <input type="number" name="wiek" id="wiek">
</label>
<label for="zgoda">
    Wyrażasz zgodę?
    <input type="checkbox" name="zgoda" id="zgoda">
</label>
<button>Dodaj użytkownika</button>
    </form>


</body>
</html>