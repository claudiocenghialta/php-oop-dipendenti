<?php

trait CalcoloStipendio
{
    private $aliquotaTassazione= 0.30;
    private $numeroMensilita= 13;
    private $stipendioNetto;
    private $RAL;


    public function getCalcoloStipendio($_stipendioLordoMensile,$_bonus=0) {
        $this->stipendioNetto=($_stipendioLordoMensile+$_bonus)*(1-$this->aliquotaTassazione);
    }
    public function getRAL($_stipendioLordoMensile,$_bonus=0) {
        $this->RAL=($_stipendioLordoMensile+$_bonus)*$this->numeroMensilita;
    }

}
