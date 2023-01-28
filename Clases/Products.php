<?php

namespace Clases;

abstract class Products
{

    public $product;

    public function __construct()
    {
        $this->product = [
            'SKU' => $_POST['sku'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'info' => '',
        ];
    }

    abstract function productInput();
}
