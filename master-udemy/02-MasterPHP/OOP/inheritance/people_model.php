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
<<<<<<< HEAD
$area_specialita="Ingegneria Informatica";
$professore = new Professore($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome, $area_specialita);
=======
$professore = new Professore($identificazione, $nomeUtente, $indirizzoEmail, $codice, $nome, $cognome);
>>>>>>> a03d36664bdc9f64bf9f1db976c366cc9ab826b5
$professore->setPassword("password2");
var_dump($professore);


$codiceMS = "C1115";
$nomeMS = "Monitor Scrittura A";
$cognomeMS = "Di Software";
$monitorScrittura = new MonitorScrittura($identificazione, $nomeUtente, $indirizzoEmail, $codiceMS, $nomeMS, $cognomeMS);
$monitorScrittura->setPassword("password3");
var_dump($professore);
