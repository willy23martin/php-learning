<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Qualificazione {
    public function getQualificazioneTotale();
    public function getDiagrammaABarreQualificazioni();
    public function getLivelliApprendimento();
    public function getLivelliDiagrammaATorta();
}