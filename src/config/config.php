<?php
$config['db_host']='localhost';
$config['db_user']='root';
$config['db_pass']='1234567890';
$config['db_name']='cvwohw';

foreach($config as $k=>$v){
    define(strtoupper($k),$v);
} 
?>
