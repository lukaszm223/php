 <?php

// $colors = ['bialy','czerwony','zielony'];

// echo $colors[0];

// echo "<hr>";

// $product = [
//     'name' => 'ziomek',
//     'price' => 242,
//     'in_stock' => 'true'
// ];
// foreach ($product as $shop => $value) {

//     echo "$shop: $value\n";

// };

// $numbers = ["1","2","3"];

// array_push($numbers, "4","5");

// echo "<hr>";

// foreach ($numbers as $number => $valuee) {

//     echo "$number: $valuee\n";

// }

// echo "<hr>";

// $fruits = ['jablko','gruszka'];


// if(in_array('banan', $fruits)){

//     echo "znajduje sie";
// }
// else {
//     echo "nie znajduje sie";
// }

// echo "<hr>"; 

$user = [
    'name' => 'Jan',
    'age' => 28,
    'city' => 'Warszawa'
];
foreach ($user as $key => $value) {
    echo "$key: $value\n";
}
$key=array('name','age','city');
print_r(array_keys($user)); 
