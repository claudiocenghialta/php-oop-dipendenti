<?php
class Dirigente extends Impiegato
{
    private $bonusMensile;
    private $areaFunzionale;
    
    public function __construct($_nome,$_cognome,$_dataDiNascita,$_stipendioLordoMensile,$_bonusMensile,$_areaFunzionale) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->dataDiNascita = $_dataDiNascita;
        $this->stipendioLordoMensile = $_stipendioLordoMensile;
        $this->tipologiaDipendente = 'Dirigente';
        $this->bonusMensile = $_bonusMensile;
        $this->areaFunzionale = $_areaFunzionale;
        $this->getCalcoloStipendio($this->stipendioLordoMensile,$this->bonusMensile);
        $this->getRAL($this->stipendioLordoMensile,$this->bonusMensile);
        $this->getNumeroMatricola($this->tipologiaDipendente);
    }
}