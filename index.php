<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $klein = new \Klein\Klein();    

    $klein->respond('GET', '/hello-world', function () {
        return 'Hello World!';
    });

    $klein->respond('GET', '/', function ($request, $response, $service) {
        $service->render('./views/landing.php');
    });   

    $klein->respond('GET', '/login', function ($request, $response, $service) {
        $service->render('./views/login.php');
    }); 

    $klein->dispatch();
?>