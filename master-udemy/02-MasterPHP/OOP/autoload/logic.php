<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

# require_once './class.php'; #Both are replaced by autoload.
# require_once './classB.php'; #Both are replaced by autoload.

require_once './autoload.php';

$contact = new Contact('Name', '33333333333');
echo 'Autoloading Contact: '. $contact->name.'<br/>';
$contactList = new ContactList('CampaignName', 'This is my campaign contact list');
echo 'Autoloading CL: '.$contactList->description.'<br/>';