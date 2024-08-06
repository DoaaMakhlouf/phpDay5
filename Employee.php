<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include ("Human.php");
class Employee extends Human
{
    private $jobTitle, $salary;

    public function __construct($id, $name, $age, $height, $weight, $jobTitle, $salary)
    {
        parent::__construct($id, $name, $age, $height, $weight);
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }

    public function displayInfo()
    {
        $humanInfo = parent::displayInfo();
        return $humanInfo . ", Job Title: " . $this->jobTitle . ", Salary: $" . $this->salary;
    }

    public function giveRaise($amount)
    {
        $this->salary += $amount;
        return "New salary: $" . $this->salary;
    }
}

?>