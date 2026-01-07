<?php 
//For loop
for($i = 1; $i <= 10; $i++){
    echo "No. ".$i;
    echo "<br>";
}

//Nested For loop
for($i = 1; $i<=10; $i++){
    for($j = 1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}
   echo "<br>";

for($i=10; $i>=1; $i--){
    for($j = 1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

// While loop
$counter = 1;
while($counter<=10){
    echo "Count. ".$counter."<br>";
    $counter ++;
}


?>