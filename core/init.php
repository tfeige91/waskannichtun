<?php
	
session_start();

$GLOBALS['config'] = array (
        'mysql' => array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => 'abcD123$',
            'db' => 'waskannichtun'
            ),
        'remember' => array (
            'cookie_name' => 'hash',
            'cookie_exry' => 604800
            ),  
        'session' => array (
            'session_name' => 'user',
            'token_name' => 'token'
            )  
    );



// Autoload classes
spl_autoload_register(function($class) {
	require_once 'classes/' .$class. '.php';
});	
	
?>