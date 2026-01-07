<?php 
$value = 4;
do{
    echo "Arrays in php<br>";
}
while($value >=10);
    
    $fruits = ['apple', 'orange', 'mango', 'banana', 'kiwi'];
    echo $fruits[0];
    $fruits[5] = 'grapes';
    echo "<br>";
    echo "Aray length: ".count($fruits)."<br>";
    print_r($fruits);
?>
