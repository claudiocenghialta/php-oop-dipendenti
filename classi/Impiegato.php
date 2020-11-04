<?php
include_once __DIR__.'/../traits/CalcoloStipendio.php';
include_once __DIR__.'/../traits/NumeroMatricola.php';

class Impiegato {
    protected $nome;
    protected $cognome;
    protected $stipendioLordoMensile;
    use CalcoloStipendio;
    use NumeroMatricola;

    public function __construct($_nome,$_cognome,$_stipendioLordoMensile) {
        // controllo nome
        if(is_string($_nome)&&!empty($_nome)){
            $this->nome = $_nome;
        } else {
            throw new Exception('il nome inserito non è una stringa');
        }
        // controllo cognome 
        if(is_string($_cognome)&&!empty($_cognome)){
            $this->cognome = $_cognome;
        } else {
            throw new Exception('il cognome inserito non è una stringa');
        }
        // controllo stipendio 
        if(is_int($_stipendioLordoMensile)&&!empty($_stipendioLordoMensile)){
            $this->stipendioLordoMensile = $_stipendioLordoMensile;
        } else {
            throw new Exception('Lo stipendio Lordo Mensile inserito non è un numero');
        }

    }

    // set 
    public function setNome($_nome){
        if(is_string($_nome)&&!empty($_nome)){
            $this->nome = $_nome;
        } else {
            throw new Exception('il nome inserito non è una stringa');
        }
    }
    public function setCognome($_cognome){
        if(is_string($_cognome)&&!empty($_cognome)){
            $this->cognome = $_cognome;
        } else {
            throw new Exception('il cognome inserito non è una stringa');
        }
    }
    public function setStipendioLordoMensile($_stipendioLordoMensile){
        if(is_int($_stipendioLordoMensile)&&!empty($_stipendioLordoMensile)&&$_stipendioLordoMensile>0){
            $this->stipendioLordoMensile = $_stipendioLordoMensile;
        } else {
            throw new Exception('Lo stipendio Lordo Mensile inserito non è un numero');
        }
    }
    // get
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getStipendioLordoMensile(){
        return $this->stipendioLordoMensile;
    }

    // to string
    public function __toString(){
        return
        '<br>-----------------'.
        '<br>Nome: '.$this->getNome().
        '<br>Cognome: '.$this->getCognome().
        '<br>Numero Matricola: '.$this->getNumeroMatricola().
        '<br>RAL: '.$this->getRAL().
        '<br>Stipendio Lordo Mensile: '.$this->getStipendioLordoMensile().
        '<br>Stipendio Netto Mensile: '.$this->getStipendioNettoMensile();
    }
}