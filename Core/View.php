<?php

namespace Core;

class View
{
    public function render($name, $item = "")
    {
        require 'Views/' . $name . '.php';
    }
}
