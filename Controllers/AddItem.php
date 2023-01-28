<?php

namespace Controllers;

use Controllers\MainController;

class AddItem extends MainController
{
    public $title = 'Product add';

    public function __construct()
    {
        parent::__construct();
        $this->view->render('Header', $this->title);
        $this->view->render('Add');
        $this->view->render('Footer');
    }
    //Get data with product properties
    public function getData()
    {
        $selector = strtolower($_POST['selector']);
        $obj = 'Clases\\' . $selector;
        $obj = new $obj();
        $product = $obj->productInput();
        return $product;
    }
    //Add data to database
    public function addItem()
    {
        $product = $this->getData();
        var_dump($product);
        $this->model->setItems($product);
    }
}
