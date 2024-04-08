<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

function autoloader($class_name)
{
    $directories = ['', '/controllers', '/views', '/templates', '/src', '/config'];
    foreach ($directories as $dir) {
        $file = __DIR__ . $dir . '/' . $class_name . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
}
spl_autoload_register('autoloader');

$app = AppFactory::create();

$app->get('/alunni', "AlunniController:getAlunni");
$app->get('/alunni/{id}', "AlunniController:getAlunno");
$app->post('/alunni', "AlunniController:postAlunno");
$app->put('/alunni', "AlunniController:putAlunno");
$app->delete('/alunni/{id}', "AlunniController:deleteAlunno");

$app->run();
