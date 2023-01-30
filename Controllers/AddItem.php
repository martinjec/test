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
    //Get product data 
    public function getData()
    {
        $selector = $_POST['selector'];
        $obj = 'Clases\\' . $selector;
        $obj = new $obj();
        $product = $obj->productInput();
        return $product;
    }
    //Add product to database
    public function addItem()
    {
        $product = $this->getData();
        $this->model->setItems($product);
    }
}
