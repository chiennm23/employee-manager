<?php


class Employee
{
    protected $id;
    protected $name;
    protected $age;
    protected $address;

    public function __construct($id, $name, $age, $address)
    {
        $this->id =$id;
        $this->name =$name;
        $this->age =$age;
        $this->address =$address;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAddress()
    {
        return $this->address;
    }

}