<?php

namespace Controllers;

include_once('MainController.php');

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

    public function getData()
    {
        //Get data witch product type will be saved
        $selector = strtolower($_POST['selector']);
        //Data about CD
        if (isset($_POST['size'])) {
            $dvd = 'Size' . $_POST['size'] . 'MB';
        };
        //Data about Book
        if (isset($_POST['weight'])) {
            $book = 'Weight' . $_POST['weight'] . 'Kg';
        };
        //Data about Furniture
        if (isset($_POST['height']) && isset($_POST['width']) && isset($_POST['length'])) {
            $furniture = 'Dimension' . $_POST['height'] . ' x ' . $_POST['width'] . ' x ' . $_POST['length'];
        };
        //Assign product type
        $info = $$selector;
        //Prepere data to be send to database
        $product = [
            'SKU' => $_POST['sku'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'info' => $info,
        ];
        return $product;
    }
    //Add data to database
    public function addItem()
    {
        $product = $this->getData();
        $this->model->setItems($product);
    }
}
