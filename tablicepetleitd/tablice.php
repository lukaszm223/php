<?php
$colors = ['bialy','czerwony','zielony'];

echo $colors[0];

$product = [
    'name' => 'ziomek',
    'price' => 242,
    'in_stock' => 'true'
];
foreach ($product as $shop => $value) {

    echo "$shop: $value\n";

};
$numbers = ["1","2","3"];

array_push($numbers, "4","5");
echo $numbers[0];