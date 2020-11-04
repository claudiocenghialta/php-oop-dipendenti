<?php

trait NumeroMatricola {
    private $numeroMatricola;
    private $tipologie = ['Impiegato', 'Dirigente'];
    // set 
    public function setNumeroMatricola($_tipologiaDipendente){
        if(in_array($_tipologiaDipendente,$this->tipologie)){
            $this->numeroMatricola=strtoupper(substr($_tipologiaDipendente,0,3)).rand(1000,9999);
        } else {
            throw new Exception('la tipologia inserita non è valida');
        }
    }
    // get 
    public function getNumeroMatricola(){
        return $this->numeroMatricola;
    }
}