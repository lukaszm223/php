<?php

$colors = ['bialy','czerwony','zielony'];

echo $colors[0];

$product = [
    'name' => 'Konrad',
    'price' => 242,
    'in_stock' => 'true'
];
$numbers = [1, 2, 3, 4];

echo $numbers[0]; 


foreach ($numbers as $number) {
    echo $number . "\n";
}

array_push($numbers,"niebieski","czarny",);

$fruits = ['jablko','gruszka'];


if(in_array('banan', $fruits)){

    echo "znajduje sie";
}
else {
    echo "nie znajduje sie";
}


