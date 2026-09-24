<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column; 
            height: 100vh;
            width: 100vw;
        }
        table, th{
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "mysqli_example");
if($conn){
    echo"Połaczono z bazą danych";
}else{
    echo"Połączenie nie powiodło się";
}?>
<?php
$sql = "SELECT * FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $nazwa = $row['nazwa'];
    $email = $row['email'];
}?>
<?php
    echo"
    <table>
    <td>
        <th>ID</th>
        <th>NAZWA</th>
        <th>EMAIL</th>
    </td>
    
    <td>
        <th>$id</th>
        <th>$nazwa</th>
        <th>$email</th>
    </td>
    
    </table>
    "
?>
<form action='adduser.php' method='POST'>
    <label for='nazwa'>
        <p>Podaj swoją nazwę:</p>
        <input type='text' name='nazwa' id='nazwa'/>
    </label>
    <label for='haslo'>
        <p>Podaj swoje hasło:</p>
        <input type='password' name='haslo' id='haslo'/>
    </label>
    <label for='email'>
        <p>Podaj swój email:</p>
        <input type='email' name='email' id='email'/>
    </label>

    <button>Dodaj</button>
</form>
    
</body>
</html>


