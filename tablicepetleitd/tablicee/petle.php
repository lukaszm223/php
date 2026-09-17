<?php
for($i = 1; $i<= 11; $i++) {
    echo $i . " ";
}
$number = 2;
while ($number <=20) {
    echo $number . " ";
    $number+=2;
} 
$imiona = ["maciek", "andrzej", "oskar", "damian", "michał"];
foreach ($imiona as $imie) {
    echo $imie . "\n";
}
$komunikat = 0;
do {
    echo  "xddd";
    $komunikat++;
} while ($komunikat < 1);



$liczbaA = 1;
$liczbaB = 0;

do {
   $liczbaB += $liczbaA;
   $liczbaA++;
   echo $liczbaA . "<br>";
} while ($liczbaA <= 100);