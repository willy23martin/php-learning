<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ContactList {
    public $name;
    public $description;
    
    public function __construct($name, $description) {
        $this->name=$name;
        $this->description=$description;
    }
    
}