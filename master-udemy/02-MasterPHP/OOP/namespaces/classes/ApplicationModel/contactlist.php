<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ApplicationModel;

class ContactList {
    public $name;
    public $description;
    
    public function __construct($name, $description) {
        $this->name=$name;
        $this->description=$description;
    }
    
    public function information(){
        echo __CLASS__.'<br/>';
        echo __METHOD__.'<br/>';
        echo __FUNCTION__.'<br/>';
        echo __FILE__.'<br/>';
        echo __TRAIT__.'<br/>';
        echo __NAMESPACE__.'<br/>';
        echo __LINE__.'<br/>';
    }
}