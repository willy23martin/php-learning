<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Studente extends Utente{
    
    private $codice;
    private $nome;
    private $cognome;
    private $carriera_universitaria_A;
    private $carriera_universitaria_B;
    
    public function __construct($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome, $carriera_universitaria_A) {
        parent::__construct($identificazione, $nomeUtente, $indirizzoEmail);
        $this->codice = $codice;
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->carriera_universitaria_A=$carriera_universitaria_A;
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

    public function getCarriera_universitaria_A() {
        return $this->carriera_universitaria_A;
    }

    public function getCarriera_universitaria_B() {
        return $this->carriera_universitaria_B;
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

    public function setCarriera_universitaria_A($carriera_universitaria_A): void {
        $this->carriera_universitaria_A = $carriera_universitaria_A;
    }

    public function setCarriera_universitaria_B($carriera_universitaria_B): void {
        $this->carriera_universitaria_B = $carriera_universitaria_B;
    }
    
}
