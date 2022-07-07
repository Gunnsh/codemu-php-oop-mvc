<?php
class User {
	private $name;
	private $surname;
	private $birthday;
	private $age;

	public function __construct($name, $surname, $birthday) {
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = $birthday;
		$this->age = $this->calculateAge();
	}

	public function getName() {
		return $this->name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function getBirth() {
		return $this->birthday;
	}

	public function getAge() {
		return $this->age;
	}

	private function calculateAge() {
		return floor((time() - strtotime($this->birthday)) / 31536000);
	}
}
?>