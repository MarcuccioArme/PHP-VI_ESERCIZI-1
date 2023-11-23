<?php

    $arraySequenziale = [];

    for ($i = 0; $i < 20; $i++) {
        $numero = rand(1,10);
        $arraySequenziale[] = $numero;
    }

    $nRipetuto = 0;
    $nRipetizioniPrecedenti = 0;
    $contatoreRipetizioni = 0;

    for ($i = 0; $i < 20; $i++) {

        for ($j = $i; $j < 20-1; $j++) {

            if ($arraySequenziale[$i] == $arraySequenziale[$j+1]){
                $contatoreRipetizioni++;
            }

        }

        if ($contatoreRipetizioni > $nRipetizioniPrecedenti) {
            $nRipetuto = $arraySequenziale[$i];
            $nRipetizioniPrecedenti = $contatoreRipetizioni;
        }

        $contatoreRipetizioni = 0;

    }

    $nRipetizioniPrecedenti+=1;

    echo "Array Sequenziale: <br>";
    for ($i=0; $i<20; $i++) {
        $contenuto = $arraySequenziale[$i];
        echo "$contenuto ";
    }

    echo "<br><br>Numero con piu ripetizioni: $nRipetuto";
    echo "<br>Numero di ripetizioni: $nRipetizioniPrecedenti";

?>