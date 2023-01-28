<?php

namespace Controllers;

use \Views;
use \Models;

abstract class MainController
{
    public $view;
    public $model;

    public function __construct()
    {
        $this->view = new Views\View();
        $this->model = new Models\Model();
    }

    abstract function getData();
}
