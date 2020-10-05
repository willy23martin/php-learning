<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Utente {

    // Caracteristiche
    protected $identificazione;
    protected $nomeUtente;
    protected $indirizzoEmail;
    protected $password;

    // Constructor

    public function __construct($identificazione, $nomeUtente, $indirizzoEmail) {
        $this->identificazione = $identificazione;
        $this->nomeUtente = $nomeUtente;
        $this->indirizzoEmail = $indirizzoEmail;
    }

    // Metodi
    public function getIdentificazione() {
        return $this->identificazione;
    }

    public function getNomeUtente() {
        return $this->nomeUtente;
    }

    public function getIndirizzoEmail() {
        return $this->indirizzoEmail;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setIdentificazione($identificazione): void {
        $this->identificazione = $identificazione;
    }

    public function setNomeUtente($nomeUtente): void {
        $this->nomeUtente = $nomeUtente;
    }

    public function setIndirizzoEmail($indirizzoEmail): void {
        $this->indirizzoEmail = $indirizzoEmail;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

}
