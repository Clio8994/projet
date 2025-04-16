<?php
define('SERVER', 'mysql:server=localhost;dbname=bowling');
define('LOGIN', 'root');
define('PASS', '');

try {
    $connexion = new PDO(SERVER, LOGIN, PASS);
} catch(Exception $e) { 
    echo $e->getMessage();
}