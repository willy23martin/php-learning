<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MonitorScrittura extends Utente {

    private $codice;
    private $nome;
    private $cognome;

    public function __construct($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome) {
        parent::__construct($identificazione, $nomeUtente, $indirizzoEmail);
        $this->codice = $codice;
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function getCodice() {
        return $this->codice;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function setCodice($codice): void {
        $this->codice = $codice;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCognome($cognome): void {
        $this->cognome = $cognome;
    }

}
