<?php
include_once __DIR__.'/../traits/CalcoloStipendio.php';
include_once __DIR__.'/../traits/NumeroMatricola.php';

class Impiegato {
    protected $nome;
    protected $cognome;
    protected $dataDiNascita;
    protected $stipendioLordoMensile;
    protected $tipologiaDipendente;
    use CalcoloStipendio;
    use NumeroMatricola;

    public function __construct($_nome,$_cognome,$_dataDiNascita,$_stipendioLordoMensile) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->dataDiNascita = $_dataDiNascita;
        $this->stipendioLordoMensile = $_stipendioLordoMensile;
        $this->tipologiaDipendente = 'Impiegato';
        $this->getCalcoloStipendio($this->stipendioLordoMensile);
        $this->getRAL($this->stipendioLordoMensile);
        $this->getNumeroMatricola($this->tipologiaDipendente);
    }

    

}