<?php

// 1. feladat
$feladat1tomb=[5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];
for($i=0;$i<count($feladat1tomb);$i++) {
    echo  is_numeric($feladat1tomb[$i])? 'Igen<br>' : 'Nem<br>';
}

// 2. feladat
$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
    "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");
foreach($orszagok as $orszagNev => $varos) {
    echo $orszagNev . ': ' . $varos;
    echo "<br>";
}
// 3. feladat
$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);
foreach ($napok as $nyelv => $napArr) {
    echo $nyelv . ': ';
    foreach ($napArr as $nap) {
        echo $nap .' ';
    }
    echo '<br>';
}
//4. feladat
$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
function atalakit($legyenKisbetu, $arr) {
    if($legyenKisbetu) {
        foreach ($arr as $elem) {
            $elem = strtolower($elem);
            echo $elem;
            echo '<br>';
        }
    }
    else {
        foreach ($arr as $elem) {
            $elem = strtoupper($elem);
            echo $elem;
            echo '<br>';
        }
    }
    return $arr;
}
atalakit(true, $szinek);
atalakit(false, $szinek);

