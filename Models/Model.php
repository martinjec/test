<?php

namespace Models;

use \Core;

class Model extends Core\DbConn
{
    public $data = [];
    
    public function __construct()
    {
        parent::connect();
    }
    /* 
    * Fetch items from database
    */
    public function getItems()
    {
        $sql = "SELECT * FROM goods";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            $this->data[] = $row;
        }
    }
    /* 
    * Add items to database
    */
    public function setItems($data)
    {
        //Check if SKU exists
        $checkSKU = $this->conn->prepare("SELECT SKU FROM goods WHERE SKU = :sku");
        $checkSKU->bindParam(':sku', $data['SKU']);
        $checkSKU->execute();
        if ($checkSKU->rowCount() > 0) {
            echo '<div id ="msg">SKU alredy exists!</div>';
        } else {
            //Insert data in to database
            $sql = 'INSERT INTO goods(SKU, name, price, info) VALUES (:SKU, :name, :price, :info)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'SKU' => $data['SKU'],
                'name' => $data['name'],
                'price' => $data['price'],
                'info' => $data['info'],
            ]);
            echo '<div id ="msg"></div>';
        }
    }
    /* 
    * Delete item from database
    */
    public function deleteItem($data)
    {
        foreach ($data as $id) {
            $sql = "DELETE FROM goods WHERE id= $id";
            $stmt = $this->connect();
            $stmt->exec($sql);
        }
    }
}
