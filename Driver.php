<?php
require_once 'Employee.php';

class Driver extends Employee {
	private $drivexp;
	private $cat;

	public function setDrivexp($drivexp) {
		$this->drivexp = $drivexp;
	}

	public function getDrivexp() {
		return $this->drivexp;
	}

	public function setCat($cat) {
		$this->cat = $cat;
	}

	public function getCat() {
		return $this->cat;
	}
}