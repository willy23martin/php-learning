<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try{
throw new Exception("This is an error");
} catch(Exception $error){
    echo '<strong> Exception was thrown: '.$error.'</strong>';
} finally {
    echo 'Finishing the exception block execution';
}