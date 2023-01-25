<?php

namespace Controllers;

use Controllers\MainController;

class DeleteItem extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }
    //Gather knowledge whitch items need to be deleted from database
    public function getData()
    {
        return array_keys($_POST);
    }
    //Deleting items from database
    public function delItem()
    {
        $data = $this->getData();
        $this->model->deleteItem($data);
        header('Location: ../../');
    }
}
