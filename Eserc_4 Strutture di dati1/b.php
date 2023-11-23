<?php

    $arraySequenziale = [];

    for ($i = 0; $i < 20; $i++) {
        $numero = rand(1,200);
        $arraySequenziale[] = $numero;
    }

    $nPari = 0;
    $nDispari = 0;

    $arrayPari = [];
    $arrayDispari = [];

    for ($i = 0; $i < 20; $i++) {
        
        $numero = $arraySequenziale[$i];

        if ($numero % 2 == 0) {
            $nPari++;
            $arrayPari[] = $numero;
        } else {
            $nDispari++;
            $arrayDispari[] = $numero;
        }

    }

    echo "Vettore Sequenziale: <br>";
    for ($i=0; $i<20; $i++) {
        $contenuto = $arraySequenziale[$i];
        echo "$contenuto ";
    }

    echo "<br><br>I numeri pari sono: $nPari";
    echo "<br>Vettore dei Numeri Pari: <br>";
    for ($i=0; $i<$nPari; $i++) {
        $contenuto = $arrayPari[$i];
        echo "$contenuto ";
    }

    echo "<br><br>I numeri dispari sono: $nDispari";
    echo "<br>Vettore dei Numeri Dispari: <br>";
    for ($i=0; $i<$nDispari; $i++) {
        $contenuto = $arrayDispari[$i];
        echo "$contenuto ";
    }

?>