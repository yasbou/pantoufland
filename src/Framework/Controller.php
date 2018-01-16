<?php

namespace Hackathon\Framework;

use \League\Plates\Engine as TemplateEngine;

class Controller {

  protected $router;
  protected $config;
  protected $template;

  public function __construct ($router, $config) {

    $this->router = $router;
    $this->config = $config;

    // On initialise le moteur de templates
    $this->template = new TemplateEngine('src/Templates');

    // On démarre les sessions
    session_start();

    // On rend accessible nos données à l'ensemble des templates
    $this->template->addData([
      'BASE_PATH' => $this->config['BASE_PATH'],
      'router' => $this->router
    ]);
  }

  protected function redirect($route) {

    header('Location: ' . $this->router->generate($route));
    exit();
  }
}
