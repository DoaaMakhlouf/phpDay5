<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include 'Employee.php';

// Create a Human instance
$person = new Human("123456", "Doaa", 29, 159, 52);
echo $person->displayInfo() . "<br>";  

// Create an Employee instance
$employee = new Employee("456879", "Sandy", 23, 152, 52, "Software Developer", 70000);
echo $employee->displayInfo() . "<br>";  

// Give a raise to the employee
echo $employee->giveRaise(5000) . "<br>";  

?>