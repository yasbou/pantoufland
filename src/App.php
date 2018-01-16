<?php

namespace Hackathon;

use \AltoRouter;

class App {

  public function __construct() {

    $this->config = parse_ini_file('config.conf');

    Framework\Database::setConfig($this->config);
    //$db = Framework\Database::getDb();

    $this->router = new AltoRouter();
    $this->router->setBasePath($this->config['BASE_PATH']);

    $this->defineRoutes();
  }

  public function run() {

    $match = $this->router->match();

    if ($match) {

      $target = explode('#', $match['target']);
      $controllerName = "Hackathon\\Controller\\" . $target[0];

      $controller = new $controllerName($this->router, $this->config);

      call_user_func([$controller, $target[1]], $match['params']);

    } else {

      echo 'Route inconnue';
    }
  }

  private function defineRoutes() {

    $this->router->map('GET', '/', 'MainController#home', 'home');
    $this->router->map('GET|POST', '/valid', 'CartController#valid', 'valid');
    $this->router->map('GET', '/confirm', 'CartController#confirm', 'confirm');
    $this->router->map('POST', '/cart/add', 'CartController#add', 'add');
    $this->router->map('POST', '/cart/remove', 'CartController#remove', 'remove');
  }


}
