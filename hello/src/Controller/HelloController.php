<?php

  namespace Drupal\hello\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class HelloController extends ControllerBase { 

    public function sayhello() { 

      return array(
         '#markup' => hello_hello_world(),
      );

    }

  }