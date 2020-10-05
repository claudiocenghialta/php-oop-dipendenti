<?php

trait NumeroMatricola {
    private $numeroMatricola;

    public function getNumeroMatricola($_tipologiaDipendente){
        $this->numeroMatricola=strtoupper(substr($_tipologiaDipendente,0,3)).rand(1000,9999);
    }
}