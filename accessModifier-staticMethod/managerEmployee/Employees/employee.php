<?php
namespace Employees;

class Employee
{
    private $firstName;
    private $lastName;
    private $birthday;
    private $address;
    private $position;

    public function __construct($firstName, $lastName, $birthday, $address, $position )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;
    }

    public function setFirstName($name)
    {
        $this->firstName = $name;
    }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($name)
    {
        $this->lastName = $name;
    }
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setPossition($position)
    {
        $this->position = $position;
    }
    public function getPossition()
    {
        return $this->position;
    }
}
?>