<?php
$matrice = array();
$matrice[0] = array(1,2,3,4,5);
$matrice[1] = array(1,2,3,4,5);
$matrice[2] = array(1,2,3,4,5);
$matrice[3] = array(1,2,3,4,5);
$matrice[4] = array(1,2,3,4,5);

$ligne = "0";

echo "<table>";

while (isset($matrice[$ligne])) {
    
    $colone = "0";
    echo "<tr>";
    while (isset($matrice[$ligne][$colone])) {
    
        echo "<td>";
        echo $matrice[$ligne][$colone];
        echo "</td>";
        $colone = $colone + "1";
    
    }
    
    echo "</tr>";
    $ligne = $ligne + "1";
    
}

echo "</table>";

?>