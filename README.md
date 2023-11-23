# PHP-VI_ESERCIZI-1
### Alcuni esercizi per continuare a prendere dimestichezza con PHP

a) Si generino casualmente(**) 10 numeri interi di valore compreso tra 10 e 100 e li si inseriscano in un vettore; successivamente nello stesso vettore si <b>ribaltino</b> di posizione.

b) Scrivere uno script che riempia in modo casuale un array sequenziale di <b>20 numeri interi</b> e:
- conti e visualizzi in output, quanti sono i <b>pari</b> e quanti sono i <b>dispari</b>.
- separi i <b>dispari</b> dai <b>pari</b> ponendoli e visualizzandoli in <b>due array separati</b>.

c) Scrivere uno script che riempia in modo casuale un array sequenziale di <b>20 numeri interi</b> e:
- individui se sono presenti numeri <b>ripetuti</b>.
- indichi il numero presente con il <b>maggior numero di ripetizioni</b>.


<br>(**) – Vedi <b>Nota</b> su “<b>generazione numeri casuali</b>” a <b>pagina successiva</b>.


<br><b>Nota</b>:
La generazione di un <b>numero casuale</b> in <b>PHP</b>, passa per due fasi:
- inizializzazione del <b>generatore di numeri casuali</b> (<b>srand</b>(int seme))
- produzione del <b>numero casuale</b> ( <b>rand</b>([int inizio, int fine]) )
  
La funzione <b>srand(…)</b> imposta il generatore di numeri casuali ad una posizione “<b>casuale</b>”, cioè un valore “<b>seme</b>” di partenza.
<br>Per inizializzare adeguatamente il generatore di numeri casuali, occorre partire da un numero molto grande: utilizzando la funzione <b>microtime()</b> e moltiplicando la parte in microsecondi del suo output per un numero molto grande, si ottiene proprio il risultato desiderato.
<br>Una volta impostato il generatore di numeri casuali, si è pronti per utilizzare la funzione che “produce” i numeri casuali.

<b>rand([int inizio, int fine]);</b>

<b>Esempio script PHP per generare un numero “casuale”</b>.

&lt;?php

<br>// Numeri CASUALI - Esempio.
<br>//------------------------------------------------

<br>srand((double) microtime() * 1000000);
<br>$randVal = rand(1,6);
<br>echo &quot;Numero casuale prodotto: &quot;,&quot;&lt;B&gt;&quot;.$randVal.&quot;&lt;/B&gt;&quot;;

<br>?&gt;
