<?php
require_once 'Product.php';

class Cart {
    public $products = [];

    public function add($prod) {
        $this->products[] = $prod;
    }

    public function remove($name) {
        foreach ($this->products as $key => $val) {
            if ($val->getName() == $name) {
                unset($this->products[$key]);
            }
        }
    }

    public function getTotalQuantity() {
        $res = 0;
        foreach ($this->products as $val) {
            $res += $val->getQuantity();
        }
        return $res;
    }

    public function getTotalCost() {
        $res = 0;
        foreach ($this->products as $val) {
            $res += $val->getCost();
        }
        return $res;
    }

    public function getAvgPrice() {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}
?>