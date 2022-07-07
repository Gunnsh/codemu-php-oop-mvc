<?php
require_once 'AvgHelper.php';

class Arr {
    private $arr = [];
    private $obj;

    public function __construct() {
        $this->obj = new AvgHelper;
    }

    public function add($num) {
        $this->arr[] = $num;
    }

    public function getAvgMeanSum() {
        $arr = $this->arr;
        $obj = $this->obj;
        return $obj->getAvg($arr) + $obj->getMeanSquare($arr);
    }
}