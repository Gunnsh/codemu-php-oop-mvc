<?php
require_once 'Employee.php';
// require_once 'Student.php';
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
require_once 'Post.php';

$prog = new Post('programmer', 10000);
$manag = new Post('manager', 2000);
$driver = new Post('driver', 700);

$worker = new Employee('max', 'ybarra', $prog);
echo $worker->getName();
echo $worker->getSurname();
echo $worker->post->getName();
$worker->changePost($manag);
echo $worker->post->getName();
?>