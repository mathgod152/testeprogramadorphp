<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    require('vendor/autoload.php');  
    
    define('INCLUDE_PATH_STATIC','http://localhost/TesteProgramadorPHP1/TesteProgramadorPHP1/Views/Pages/');
    define('INCLUDE_PATH','http://localhost/TesteProgramadorPHP1/');
    $app = new TesteProgramadorPHP1\Application();

    $app->run();

?>

