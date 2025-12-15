<?php
// Utilisation des variables d'environnement
$db_host = getenv('DB_HOST') ?: 'localhost'; 
$db_user = getenv('DB_USER') ?: 'root'; 
$db_pass = getenv('DB_PASS') ?: 'password';
$db_name = getenv('DB_NAME') ?: 'default_db';

// Création du DSN dans une variable
$DB_DSN_VAR = 'mysql:host=' . $db_host . ';dbname=' . $db_name;

// Définition de constantes
define('DB_DSN', $DB_DSN_VAR);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);


$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_EMULATE_PREPARES => false 
);
?>
