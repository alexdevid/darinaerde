<?php
namespace Controller;

class Controller {

    /**
     * @var \Slim\Slim
     */
    private $slim;

    public function __construct() {
        $this->slim = \Portfolio::$app->getSlim();
    }

    /**
     * @return \Slim\Slim
     */
    public function getSlim() {
        return $this->slim;
    }
}