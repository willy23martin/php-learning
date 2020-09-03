/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  William Martín Chávez González
 * Created: 1/09/2020
 */
/*
tinyint
int(*digits)
integer(*digits)
varchar(*characters)
char(*characters)
float(*digits, *precision)
date

TEXT 65535 characters
MEDIUMTEX 16000000 characters
LONGTEXT 16 BILLIONS characters

MEDIUMINT
BIGINT
...
*/
CREATE TABLE callbacks(
id int(20) not null auto_increment,
first_name varchar(50) not null,
last_name varchar(255) not null default 'N/A',
cellphone varchar(20) not null,
email varchar(255) not null,
CONSTRAINT pk_callbacks PRIMARY KEY (id)
);

