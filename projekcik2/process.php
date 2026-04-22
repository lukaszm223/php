<?php

$imie = $_POST['imie'];
$wiek = $_POST['wiek'];
$plec = $_POST['plec'];
$zgoda = $_POST['zgoda'] || 0;

echo $imie;
echo $wiek;
echo $plec;
echo $zgoda;

echo "<h2>Imie: $imie</h2><p>Wiek / płeć: $wiek - $plec </p> <sub>RODO: $zgoda </sub>";
