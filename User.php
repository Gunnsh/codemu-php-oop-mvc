<?php
class User
{
	private $name;
	private $age;

	public function setAge($age) {
		$this->age = $age;
	}

	public function getAge() {
		return $this->age;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}
?>