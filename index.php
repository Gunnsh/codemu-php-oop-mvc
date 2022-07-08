<?php
require_once 'Employee.php';
require_once 'Student.php';
// require_once 'Programmer.php';
// require_once 'Driver.php';
// require_once 'Product.php';
// require_once 'Arr.php';
// require_once 'SumHelper.php';
// require_once 'AvgHelper.php';
// require_once 'Cart.php';
// require_once 'EmployeesCollection.php';
// require_once 'User.php';
// require_once 'City.php';

class UsersCollection {
	private $stud = [];
	private $emps = [];

	public function add($obj) {
		if ($obj instanceof Student) {
			$this->stud[] = $obj;
		}

		if ($obj instanceof Employee) {
			$this->emps[] = $obj;
		}
	}

	public function getTotalSalary() {
		$res = 0;
		foreach ($this->emps as $val) {
			$res += $val->getSalary();
		}
		return $res;
	}

	public function getTotalScholarship() {
		$res = 0;
		foreach ($this->stud as $val) {
			$res += $val->getScholarship();
		}
		return $res;
	}

	public function getTotalPayment() {
		return $this->getTotalSalary() + $this->getTotalScholarship();
	}
}

$users = new UsersCollection;

$users->add(new Student('kyle', 100));
$users->add(new Student('luis', 200));

$users->add(new Employee('john', 300));
$users->add(new Employee('eric', 400));

echo $users->getTotalScholarship();
echo $users->getTotalSalary();
echo $users->getTotalPayment();
?>