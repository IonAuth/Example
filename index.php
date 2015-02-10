<?php

  require 'vendor/autoload.php';

  $app = new \Slim\Slim([
    'templates.path' => ' views',
    ]);
  
  // GET Routes
  $app->get('/', function() use($app) {
    $Variables = [
        'loggedIn' => 'value'
      ];

    $app->render('/header.php');
    $app->render('/navbar.php', $Variables);
    $app->render('/home.php');
    $app->render('/footer.php');
  });

  $app->get('/Private', function() use($app, $auth) {
    if() {
      $Variables = [
          'loggedIn' =>
          'Users'    =>
        ];

      $app->render('/header.php');
      $app->render('/navbar.php', $Variables);
      $app->render('/private.php');
      $app->render('/footer.php');
    } else {
      $app->redirect('/');
    }
  });
  
  // POST Routes
  $app->post('/Verify', function() use() {
    
  }):

  $app->get('/logout', function() {

  });

  // bootstrap the example
  $app->run();
