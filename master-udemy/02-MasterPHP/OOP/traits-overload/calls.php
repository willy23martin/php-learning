<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './traits.php';

$studente = new Studente('WMC');
echo $studente->showName(); // Traits
$professoressa = new Insegnante('Teacher');
echo $professoressa->showName(); // Traits 
       