<?php
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Programmer.php';
require_once 'Driver.php';
require_once 'Product.php';
require_once 'Arr.php';
require_once 'SumHelper.php';
require_once 'AvgHelper.php';
require_once 'Cart.php';

$cart = new Cart();
$cart->add(new Product('apple', 50, 1000));
$cart->add(new Product('banana', 30, 100));

echo $cart->getAvgPrice();
?>