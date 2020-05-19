<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once '../src/Employee.php';
    include_once '../src/EmployeeManager.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $employee = new Employee($id, $name, $age, $address);
    $employeeManger = new EmployeeManager('../data.json');
    $employeeManger->add($employee);
    header('location: ../index.php');
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <a href="">Add</a>
    <br>
    <label>Id</label>
    <input type="text" name="id"><br>
    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Age</label>
    <input type="text" name="age"><br>
    <label>Address</label>
    <input type="text" name="address"><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>