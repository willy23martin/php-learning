<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_COOKIE)) {
    echo $_COOKIE["firstCookie"];
    echo $_COOKIE["cookieB"];
    var_dump($_COOKIE);
} else {
    echo 'There are no cookies set';
}

