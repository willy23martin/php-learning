<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Rubrica{
    
    private static $ortografia_percentuale;
    private static $grammatica_percentuale;
    private static $coerenza_percentuale;
    private static $coesione_percentuale;
    
    const ORTOGRAFIA_PERCENTUALE = 0.03;
    const GRAMMATICA_PERCENTUALE=0.03;
    const COERENZA_PERCENTUALE=0.03;
    const COESIONE_PERCENTUALE=0.03;            
    
    public static function getOrtografia_percentuale() {
        return self::$ortografia_percentuale;
    }

    public static function getGrammatica_percentuale() {
        return self::$grammatica_percentuale;
    }

    public static function getCoerenza_percentuale() {
        return self::$coerenza_percentuale;
    }

    public static function getCoesione_percentuale() {
        return self::$coesione_percentuale;
    }

    public static function setOrtografia_percentuale($ortografia_percentuale): void {
        self::$ortografia_percentuale = $ortografia_percentuale;
    }

    public static function setGrammatica_percentuale($grammatica_percentuale): void {
        self::$grammatica_percentuale = $grammatica_percentuale;
    }

    public static function setCoerenza_percentuale($coerenza_percentuale): void {
        self::$coerenza_percentuale = $coerenza_percentuale;
    }

    public static function setCoesione_percentuale($coesione_percentuale): void {
        self::$coesione_percentuale = $coesione_percentuale;
    }
    
}

