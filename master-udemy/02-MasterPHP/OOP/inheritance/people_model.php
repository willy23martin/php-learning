<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require './../inheritance/Utente.php';
require './../inheritance/Professore.php';
require './../inheritance/MonitorScrittura.php';

$identificazione = "A0025";
$nomeUtente = "Test Utente";
$indirizzoEmail = "indi@email.domain";
$utente = new Utente($identificazione, $nomeUtente, $indirizzoEmail);
$utente->setPassword("password1");
var_dump($utente);

$codice = "B4565";
$nome = "Professore A";
$cognome = "Di Software";
$professore = new Professore($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome);
$professore->setPassword("password2");
var_dump($professore);


$codiceMS = "C1115";
$nomeMS = "Monitor Scrittura A";
$cognomeMS = "Di Software";
$monitorScrittura = new MonitorScrittura($identificazione, $nomeUtente, $indirizzoEmail, $codiceMS, $nomeMS, $cognomeMS);
$monitorScrittura->setPassword("password3");
var_dump($professore);
