<?php
$matrice = array();
$matrice[0] = array(1,2,3,4,5);
$matrice[1] = array(1,2,3,4,5);
$matrice[2] = array(1,2,3,4,5);
$matrice[3] = array(1,2,3,4,5);
$matrice[4] = array(1,2,3,4,5);

$ligne = "0";

while (isset($matrice[$ligne])) {
    
    $colone = "0";
    
    while (isset($matrice[$ligne][$colone])) {
    
        echo $matrice[$ligne][$colone];
        
        $colone = $colone + "1";
    
    }
    
    echo "</br>";
    $ligne = $ligne + "1";
    
}

?>