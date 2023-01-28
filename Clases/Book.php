<?php

namespace Clases;

use Clases\Products;

class Book extends Products
{
    public function __construct()
    {
        parent::__construct();
    }

    public function productInput()
    {
        $book = 'Weight' . $_POST['book'] . 'Kg';
        $this->product['info'] = $book;
        return $this->product;
    }
}
