<?php

//  Crea e modella classi, a piacere, per gestire i dipendenti di un'azienda. Aggiungete 1 trait a piacere 


include_once __DIR__.'/classi/Impiegato.php';
include_once __DIR__.'/classi/Dirigente.php';


$impiegato1 = new Impiegato('mario','rossi','01/01/1988',2000);
var_dump($impiegato1);


$dirigente1 = new Dirigente('paolo','bianchi','01/01/1968',4000,1000,'Logistica');
var_dump($dirigente1);
