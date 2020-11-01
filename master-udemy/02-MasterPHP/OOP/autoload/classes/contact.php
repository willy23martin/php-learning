<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contact {
    public $name;
    public $telephone;
    
    public function __construct($name, $telephone) {
        $this->name = $name;
        $this->telephone=$telephone;
    }
}
