<?php
class Dirigente extends Impiegato
{
    private $bonusMensile;
    
    public function __construct($_nome,$_cognome,$_stipendioLordoMensile,$_bonusMensile) {
       
        parent::__construct($_nome,$_cognome,$_stipendioLordoMensile);
        
        // controllo bonus mensile 
        if(is_int($_bonusMensile)&&!empty($_bonusMensile)){
            $this->bonusMensile = $_bonusMensile;
        } else {
            throw new Exception('il bonus Mensile inserito non è un numero');
        }
    }

    
    // set 
    public function setBonusMensile($_bonusMensile){
        if(is_int($_bonusMensile)&&!empty($_bonusMensile)){
            $this->bonusMensile = $_bonusMensile;
        } else {
            throw new Exception('il bonus Mensile inserito non è un numero');
        }
    }
    // get
    public function getBonusMensile(){
        return $this->bonusMensile;
    }

    // to string
    public function __toString(){
        return parent::__toString().
        '<br>Bonus: '.$this->getBonusMensile();

    }
}