<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './rubrica.php';

Rubrica::setOrtografia_percentuale(Rubrica::ORTOGRAFIA_PERCENTUALE);
Rubrica::setGrammatica_percentuale(Rubrica::GRAMMATICA_PERCENTUALE);
Rubrica::setCoerenza_percentuale(Rubrica::COERENZA_PERCENTUALE);
Rubrica::setCoesione_percentuale(Rubrica::COESIONE_PERCENTUALE);

echo '- Ortografía: ' . Rubrica::getOrtografia_percentuale() . '<br>';
echo '- Gramática: ' . Rubrica::getGrammatica_percentuale() . '<br>';
echo '- Coherencia: ' . Rubrica::getCoerenza_percentuale() . '<br>';
echo '- Cohesión: ' . Rubrica::getCoesione_percentuale() . '<br>';
