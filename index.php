<?php
include_once 'src/Employee.php';
include_once 'src/EmployeeManager.php';

$employeeManager = new EmployeeManager('data.json');
$employees = $employeeManager->getAll();

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
<a href="view/add.php">Add</a>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
    </tr>
    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $employee->getId() ?></td>
            <td><?php echo $employee->getName() ?></td>
            <td><?php echo $employee->getAge() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><a onclick="return confirm('ban chac chan muon xoa?')" href="action/delete.php?id=<?php echo $key ?>">Delete</a></td>
        </tr>

    <?php endforeach; ?>
</table>
</body>
</html>