<?php

include_once 'Employee.php';
class EmployeeManager
{
    protected $pathFile;

    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function getDataToFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }

    public function saveDataToFile($array)
    {
        $dataJson = json_encode($array);
        file_put_contents($this->pathFile, $dataJson);
    }

    public function add($employee)
    {
        $data = $this->getDataToFile();
        $arr = [
            'id' => $employee->getId(),
            'name' => $employee->getName(),
            'age' => $employee->getAge(),
            'address' => $employee->getAddress()
        ];
        array_push($data, $arr);
        $this->saveDataToFile($data);
    }

    public function getAll()
    {
        $data = $this->getDataToFile();
        $arr = [];
        foreach ($data as $item) {
            $employee = new Employee($item['id'], $item['name'], $item['age'], $item['address']);
            array_push($arr, $employee);
        }
        return $arr;
    }

    public function delete($id)
    {
        $data = $this->getDataToFile();
        unset($data[$id]);
        $this->saveDataToFile($data);
    }
}