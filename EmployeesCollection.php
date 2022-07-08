<?php
class EmployeeCollection {
    private $collection = [];

    public function addEmp($obj) {
        if (!in_array($obj, $this->collection)) {
            $this->collection[] = $obj;
        }
    }

    public function getEmp() {
        return $this->collection;
    }
}
?>