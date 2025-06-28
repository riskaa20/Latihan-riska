<?php

$GLOBALS['varGlobal'] = 18;

function testVar(): int {
    $varLokal = 1; 
    echo "<p> test variabel didalam function</p>";
    echo "Variabel global : " .$GLOBALS['varGlobal'];
    echo "</br>";
    echo "Variabel lokal : $varLokal ";
    echo "</br>";
    return $varLokal;
}

$varLokal = testVar();

    echo "<p> test variabel di luar function.<p>";
    echo "Variabel global : ".$GLOBALS['varGlobal'];
    echo "<br>";
    echo "Variabel lokal : $varLokal ";
    echo "<br>";
?>