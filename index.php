<?php

//  Crea e modella classi, a piacere, per gestire i dipendenti di un'azienda. Aggiungete 1 trait a piacere 


include_once __DIR__.'/classi/Impiegato.php';
include_once __DIR__.'/classi/Dirigente.php';


try {
    $impiegato1 = new Impiegato('Mario','rossi',2000);
} catch (Exception $e) {
    echo 'Eccezione: '.$e->getMessage();
}
echo $impiegato1;
try {
    $impiegato1->setNome('Gianni');
    $impiegato1->setCognome('Giannini');
    $impiegato1->setStipendioLordoMensile(2500);
    $impiegato1->setStipendioNettoMensile();
    $impiegato1->setRAL();
    $impiegato1->setNumeroMatricola('Impiegato');
} catch (Exception $e) {
    echo '<br><strong>Eccezione: '.$e->getMessage().'</strong><br>';
 }
echo '<br><br><br><em>Dopo Modifiche: '.$impiegato1.'</em><br><br><br>';

try {
    $dirigente1 = new Dirigente('paolo','bianchi',4000,1000);
} catch (Exception $e) {
    echo 'Eccezione: '.$e->getMessage();
}
echo $dirigente1;
try {
    $dirigente1->setNome('Fabio');
    $dirigente1->setCognome('Fabi');
    $dirigente1->setStipendioLordoMensile(5000);
    $dirigente1->setStipendioNettoMensile();
    $dirigente1->setRAL();
    $dirigente1->setNumeroMatricola('Dirigente');
} catch (Exception $e){
    echo '<br><strong>Eccezione: '.$e->getMessage().'</strong><br>';
}
echo '<br><br><br><em>Dopo Modifiche: '.$dirigente1.'</em><br><br><br>';


