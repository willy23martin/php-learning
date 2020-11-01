<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#Namespace: package for group classes and logic.
require_once './autoload.php';
use ApplicationModel\Contact as ContactModel;
use ApplicationModel\ContactList;

class Main {
    public $contact;
    public $contactList;
    
    public function __construct() {
        $this->contact = new ContactModel('Name','8989897');
        $this->contactList= new ContactList('Name','Desc');
    }
}

$main = new Main();
var_dump($main);
var_dump(get_class_methods(new ContactModel('Name', '')));

$main->contactList->information();
