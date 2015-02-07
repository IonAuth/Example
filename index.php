<?php

  require 'vendor/autoload.php';

  $app = new \Slim\Slim([
    'templates.path' => 'views',
    ]);

  $app->get('/', function() use($app) {
    $app->render('/header.php');
    $app->render('/navbar.php');
    $app->render('/home.php');
    $app->render('/footer.php');
  });

  // bootstrap the example
  $app->run();
