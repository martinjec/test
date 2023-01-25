<?php

namespace Controllers;

use \Core;
use \Models;

abstract class MainController
{
    public $view;
    public $model;

    public function __construct()
    {
        $this->view = new Core\View();
        $this->model = new Models\Model();
    }

    abstract function getData();
}
