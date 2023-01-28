<?php

namespace Views;

class View
{
    public function render($name, $item = "")
    {
        require 'Public/' . $name . '.php';
    }
}
