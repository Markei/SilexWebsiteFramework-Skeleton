<?php

use Symfony\Component\Debug\ErrorHandler;

// autoloader
require '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// load configuration
require '..' . DIRECTORY_SEPARATOR . 'env.php';
if (defined('ENV') === false) {
    trigger_error('ENV constant is not defined', E_USER_ERROR);
}
require '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'app.' . ENV . '.php';

// set up error handling
if (isset($config['debug']) && $config['debug'] === true) {
    ErrorHandler::register();
}

// run application
$app = new \Acme\AcmeWebsite\Application($config);
$app->run();