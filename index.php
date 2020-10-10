<?php
$matrice = array();
$matrice[0] = array(0,25,50,75,100);
$matrice[1] = array(0,25,50,75,100);
$matrice[2] = array(0,25,50,75,100);
$matrice[3] = array(0,25,50,75,100);
$matrice[4] = array(0,25,50,75,100);

$ligne = "0";

echo "<table>";

while (isset($matrice[$ligne])) {
    
    $colone = "0";
    echo "<tr style='height: 100px;'>";
    while (isset($matrice[$ligne][$colone])) {
        $color = $matrice[$ligne][$colone];
        $color = 100+(-1*$color);
        echo "<td style='background-color:hsl(11, 0%, $color%);width: 100px;'></td>";
        $colone = $colone + "1";
    
    }
    
    echo "</tr>";
    $ligne = $ligne + "1";
    
}

echo "</table>";

?>