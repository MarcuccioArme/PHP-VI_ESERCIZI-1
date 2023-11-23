<?php

    $vettore[] = 0;

    for ($i=0; $i<10; $i++) {
        $numero = rand(10,100);
        $vettore[$i] = $numero;
    }

    echo "Vettore Base: <br>";
    for ($i=0; $i<10; $i++) {
        $contenuto = $vettore[$i];
        echo "$contenuto ";
    }

    $vettoreReverse = array_reverse($vettore);

    echo "<br><br>Vettore Reverse: <br>";
    for ($i=0; $i<10; $i++) {
        $contenuto = $vettoreReverse[$i];
        echo "$contenuto ";
    }

?>