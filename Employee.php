<?php
require_once 'Post.php';

class Employee
{
	private $name;
	private $surname;
	public $post;

	public function __construct($name, $surname, Post $post)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->post = $post;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setSurname($surname) {
		$this->surname = $surname;
	}

	public function changePost(Post $prof) {
		$this->post = $prof;
	}
}
?>