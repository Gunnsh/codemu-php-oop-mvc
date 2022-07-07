<?php
class SumHelper {
    public function getSum2($arr) {
        return $this->Helper($arr, 2);
    }

    public function getSum3($arr) {
        return $this->Helper($arr, 3);
    }

    private function Helper($arr, $pow) {
        $res = 0;
        foreach ($arr as $val) {
            $res += pow($val, $pow);
        }
        return $res;
    }
}
?>