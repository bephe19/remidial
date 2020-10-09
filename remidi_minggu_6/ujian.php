<?php
$barang = [
    ["Tas Carir", "Consina", 72500, "tasconsina.jpg" ],
    ["Tas Carir", "Arei", 76500, "tasrei.jpg"],
    ["Tas Carir", "Eiger", 86500, "crreiger.jpg"],
    ["Tenda Camping", "Consina", 120000, "tendaconsina.jpg"],
    ["Tenda Camping", "Eiger", 90000, "tendaeiger.jpg"],
    ["Tenda Camping", "Arei", 130000, "tendarei.jpg"],
    ["Sepatu Outdoor", "Consina", 52500, "spatucon.jpg"],
    ["Sepatu Outdoor", "Eiger", 46500, "sptger.jpg"],
    ["Sepatu Outdoor", "Arei", 35500, "spaturei.png"]
];

// $temp_arr=[];

// foreach($barang as $value) {
//     echo $temp_arr[]=$value[0].$value[1].$value[2].PHP_EOL;
// }

$show_barang=[];

foreach($barang as $key) {
    $show_barang[]=$key[0];
}
$show=array_unique($show_barang);

foreach($show as $key_x){
echo $key_x.PHP_EOL;
}