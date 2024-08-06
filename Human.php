<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Human
{
    protected $id, $name, $age, $height, $weight;

    public function __construct($id, $name, $age, $height, $weight)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function displayInfo()
    {
        return
            "id: " . $this->id . ",Name: " . $this->name . ",Age: " . $this->age .
            ",height: " . $this->height . ",weight: " . $this->weight;
    }
}

?>