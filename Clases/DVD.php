<?php

namespace Clases;

use Clases\Products;

class DVD extends Products
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productInput()
    {
        $dvd = 'Size' . $_POST['dvd'] . 'MB';
        $this->product['info'] = $dvd;
        return $this->product;
    }
}
