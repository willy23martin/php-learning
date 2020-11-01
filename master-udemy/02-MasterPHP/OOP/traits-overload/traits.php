<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Traits:
 * - Are used to define a set if methods that could be shared in different classes.
 * - When the classes dont have common inheritance.
 */

trait Utilities {
    public function showName(){
        echo '<h1> The name is: '.$this->name.'</h1>';
    }
}

class Studente {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    use Utilities;
    
    public function __call($name, $arguments) {
        return "Call function";
    }
}

class Insegnante{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    use Utilities;
}

class Monitor {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    use Utilities;
}

$monitor = new Monitor('WMC');
$monitor->showName();

$studente = new Studente('Name');
$studente->showName();