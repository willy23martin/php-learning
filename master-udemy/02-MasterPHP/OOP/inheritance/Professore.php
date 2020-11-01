<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Professore extends Utente {

    private $codice;
    private $nome;
    private $cognome;
<<<<<<< HEAD
    private $area_specialita;

    public function __construct($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome, $area_specialita) {
=======

    public function __construct($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome) {
>>>>>>> a03d36664bdc9f64bf9f1db976c366cc9ab826b5
        parent::__construct($identificazione, $nomeUtente, $indirizzoEmail);
        $this->codice = $codice;
        $this->nome = $nome;
        $this->cognome = $cognome;
<<<<<<< HEAD
        $this->area_specialita=$area_specialita;
=======
>>>>>>> a03d36664bdc9f64bf9f1db976c366cc9ab826b5
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
<<<<<<< HEAD
    public function getArea_specialita() {
        return $this->area_specialita;
    }

    public function setArea_specialita($area_specialita): void {
        $this->area_specialita = $area_specialita;
    }

=======
>>>>>>> a03d36664bdc9f64bf9f1db976c366cc9ab826b5

}
