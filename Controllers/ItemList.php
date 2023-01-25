<?php

namespace Controllers;

class ItemList extends MainController
{

    public $title = 'Product list';

    public function __construct()
    {
        parent::__construct();
        $this->view->render('Header', $this->title);
        $this->view->render('Input');
        $this->list();
        $this->view->render('Footer');
    }
    //Get items from database
    public function getData()
    {
        $this->model->getItems();
    }
    //Display items
    public function list()
    {
        $this->getData();
        $model = $this->model->data;
        foreach ($model as $item) {
            $this->view->render('Items', $item);
        }
    }
}
