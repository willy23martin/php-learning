<?php

class Studente {

    // Attributes
    public $nickname;
    public $codiceStudente;
    public $nome;
    public $cognome;

    // Constructor
    
    public function __construct() {
        ;
    }
    
    // Methods
    public function getNickName() {
        return $this->nickname;
    }

    public function setNickName($newNickName) {
        $this->nickname = $newNickName;
    }

    public function getCodiceStudente() {
        return $this->codiceStudente;
    }

    public function setCodiceStudente($codiceStudente) {
        $this->codiceStudente = $codiceStudente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

}

$studenteA = new Studente();
$studenteA->setNickName("WMC");
echo $studenteA->getNickName();
var_dump($studenteA);
