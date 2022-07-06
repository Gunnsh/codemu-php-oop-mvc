<?php
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Programmer.php';
require_once 'Driver.php';

$user = new Programmer;

$user->setName('tony');
$user->setLangs(['php', 'c']);

print_r($user->getLangs());
echo $user->getName();

$user = new Driver;

$user->setName('diana');
$user->setDrivexp(23);

echo $user->getName();
echo $user->getDrivexp();
?>