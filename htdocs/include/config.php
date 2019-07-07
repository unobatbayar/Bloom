<?php

// connect to database
$ip = 'remotemysql.com';
$username = 'CpxYZhkmLC';
$password = 'TLQPahHEB2';
$database = 'CpxYZhkmLC';

$mysqli = new mysqli($ip,$username,$password,$database);
 
function __autoload($Class){
    if(!file_exists('class/'.$Class.'.php')){
        require ('../class/'.$Class.'.php');
    }
    elseif(!file_exists('../class/'.$Class.'.php')){
        require ('class/'.$Class.'.php');
    } 
}
$user = new User($mysqli);

?>