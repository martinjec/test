<?php

namespace Clases;

use Clases\Products;

class Furniture extends Products
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productInput()
    {
        $furniture = 'Dimensions' . $_POST['height'] . 'x' . $_POST['width'] . 'x' . $_POST['length'];
        $this->product['info'] = $furniture;
        return $this->product;
    }
}
