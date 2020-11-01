<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../static/rubrica.php';

abstract class Consegna{
    private $qualificazione_ortografia;
    private $qualificazione_grammatica;
    private $qualificazione_coerenza;
    private $qualificazione_coesione;
    
    public function getQualificazioneScrittura(){
        $spunti_ortografia = $this->qualificazione_ortografia*Rubrica::getOrtografia_percentuale();
        $spunti_grammatica = $this->qualificazione_grammatica*Rubrica::getGrammatica_percentuale();
        $spunti_coerenza= $this->qualificazione_coerenza*Rubrica::getCoerenza_percentuale();
        $spunti_coesione= $this->qualificazione_coesione*Rubrica::getCoesione_percentuale();
        $qualificazione_scrittura = $spunti_ortografia + $spunti_grammatica + $spunti_coerenza + $spunti_coesione;
        return $qualificazione_scrittura;
    }
    
    abstract public function getQualificazionePDG();
    
}
