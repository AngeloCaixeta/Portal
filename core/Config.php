<?php
session_start();
ob_start();

define('URL', 'http://localhost/caixeta/');
define('URLADM', 'http://localhost/caixeta/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'portal');
