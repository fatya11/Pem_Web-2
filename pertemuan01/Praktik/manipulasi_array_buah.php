<?php
$arrayBuah =["Nanas","Semangka","Strawberry","Pisang"];

//mengurutkan value sesuai urutan abjad
sort($arrayBuah);
//menghapus value array paling akhir
array_pop($arrayBuah);
//menghapus spesifik value pada array
unset($arrayBuah[3]);
// menambah value di paling belakang
array_push($arrayBuah, "Durian");
//menghapus value array paling depan
array_shift($arrayBuah);
//menambah value di paling depan
array_unshift($arrayBuah, "Buah Naga");
//menambah value array tertentu
$arrayBuah[2] = "Mangga";

foreach($arrayBuah as $Buah){
    echo $Buah . "<br>";
}