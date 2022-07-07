<?php
require_once 'SumHelper.php';

class AvgHelper {
    private $obj;

    public function __construct() {
        $this->obj = new SumHelper;
    }

    public function getAvg($arr) {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare($arr) {
        return sqrt($this->obj->getSum2($arr) / count($arr));
    }
}
?>