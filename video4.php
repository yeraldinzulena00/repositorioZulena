<?php
$container = new Container();
$router = new Router($container);

$router
    ->get('/' ,[\App\Controllers\HomeController::class, 'video4'])
    ->get('/examples/generator',[GeneratorExampleController::class, 'video4']);
(new App(
    $container,
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'metthod' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();