<?php

trait CalcoloStipendio
{
    private $aliquotaTassazione= 0.30;
    private $numeroMensilita= 13;
    private $stipendioNettoMensile;
    private $RAL;


    public function setStipendioNettoMensile() {
        if (isset($this->bonusMensile)) {
            $this->stipendioNettoMensile=($this->stipendioLordoMensile+$this->bonusMensile)*(1-$this->aliquotaTassazione);
        } else {
            $this->stipendioNettoMensile=($this->stipendioLordoMensile)*(1-$this->aliquotaTassazione);

        }
    }
    public function setRAL() {
        if (isset($this->bonusMensile)) {
            $this->RAL=($this->stipendioLordoMensile+$this->bonusMensile)*$this->numeroMensilita;
        } else {
            $this->RAL=($this->stipendioLordoMensile)*$this->numeroMensilita;
        }
    }
    public function getStipendioNettoMensile() {
        return $this->stipendioNettoMensile;
    }
     public function getRAL() {
        return $this->RAL;
    }

}
