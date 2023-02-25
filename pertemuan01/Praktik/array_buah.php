<?php
//membuat array
$arrayBuah =["Nanas","Semangka","Strawberry","Pisang"];

//cara pertama
print_r ($arrayBuah);
echo "<br>";
//cara kedua
var_dump($arrayBuah);
echo "<br>";
//cara ketiga
foreach($arrayBuah as $Buah){
    echo $Buah . "<br>";
}