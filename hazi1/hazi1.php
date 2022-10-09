<?php


// 1. feladat
echo '1. feladat<br>';
$dayOfTheWeek = date('w');
$daysOfTheWeek = ['Vasarnap', 'Hetfo','Kedd','Szerda','Csutortok','Pentek','Szombat'];
echo 'Ma '. $daysOfTheWeek[$dayOfTheWeek];
// 2. feladat
echo'<br></br>2.feladat<br>';
echo '
<br>

<form method="post">
Szam1: <input type="number" name="szam1">
<br>
Szam2: <input type="number" name="szam2">

<br>
<button type="submit" name="addNumbersBtn">Ossze ad</button>
<button type="submit" name="subtractNumbersBtn">Ki von</button>
<button type="submit" name="multiplyNumbersBtn">Szoroz</button>
<button type="submit" name="divideNumbersBtn">Oszt</button>
</form>
<br><br>Eredmeny: 
';

if(array_key_exists('addNumbersBtn', $_POST)) {
    addNumbers();
}
else if(array_key_exists('subtractNumbersBtn', $_POST)) {
    subtractNumbers();
}
else if(array_key_exists('multiplyNumbersBtn', $_POST)) {
    multiplyNumbers();
}
else if(array_key_exists('divideNumbersBtn', $_POST)) {
    divideNumbers();
}
else if(array_key_exists('osztoTablaBtn',$_POST)) {
    $szam3 = $_POST['szam3'];
    if(is_numeric(number_format($szam3))) {
        for($i = 1;$i<$szam3;$i++) {
            echo $szam3 . '/' . $i . '= ' . $szam3/$i . '<br>';
        }
    }
}
function getNumbers() {
    $szam1 = is_numeric($_POST['szam1']) ? number_format($_POST['szam1']) : 0;
    $szam2 = is_numeric($_POST['szam2']) ? number_format($_POST['szam2']) : 0;
    return [$szam1, $szam2];
}

function addNumbers() {
    $szamok = getNumbers();
    echo $szamok[0]+$szamok[1];
}
function subtractNumbers() {
    $szamok = getNumbers();
    echo $szamok[0]-$szamok[1];
}
function multiplyNumbers(){
    $szamok = getNumbers();
    echo $szamok[0]*$szamok[1];
}
function divideNumbers() {
    $szamok = getNumbers();
    echo $szamok[0]/$szamok[1];
}
// 3. feladat
echo '<br>3. feladat<br>';

echo '
<form method="post">
<input type="number" name="szam3">
<button type="submit" name="osztoTablaBtn">oszto tabla keszit a fenti szamra</button>
</form>';
?>

4. feladat
<table border="solid 1px">
    <?php
    for($sor=1;$sor<=8;$sor++)
    {
        echo "<tr>";
        for($oszlop=1; $oszlop<=8; $oszlop++)
        {
            $ossz=$sor+$oszlop;
            if($ossz%2==0)
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

