<?php

    $array = [];

    for ($i=0; $i<10; $i++) {
        $numero = rand(10,100);
        $array[] = $numero;
    }

    echo "Vettore Base: <br>";
    for ($i=0; $i<10; $i++) {
        $contenuto = $array[$i];
        echo "$contenuto ";
    }

    $arrayReverse = array_reverse($array);

    echo "<br><br>Vettore Reverse: <br>";
    for ($i=0; $i<10; $i++) {
        $contenuto = $arrayReverse[$i];
        echo "$contenuto ";
    }

?>