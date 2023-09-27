
<?php

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function even($number){
    return $number % 2 == 0; // for even number
};

$evenNum=array_filter($number, 'even');
print_r($evenNum);

echo "<br><br>";

function odd($number){
    return $number % 2 != 0; // for odd number
};

$oddNum=array_filter($number, 'odd');
print_r($oddNum);

?>
