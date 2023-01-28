<?php
            
            $sku = '<div>' . $item['SKU'] . '</div>';
            $name = '<div>' . $item['name'] . '</div>';
            $price = '<div>' . $item['price'] . ' $</div>';
            $info = '<div>' . $item['info'] . '</div>';
            $check = '<div><input type="checkbox" class="delete-checkbox" name=' . $item['id'] . '><lable for="checkbox">Delete</lable></div>';

            echo '<div class="item">' . $check . $sku . $name . $price . $info . '</div>';
        
   