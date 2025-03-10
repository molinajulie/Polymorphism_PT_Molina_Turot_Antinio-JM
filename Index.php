<?php
require_once "FullTimeEmployee.php";
require_once "PartTimeEmployee.php";
require_once "ContractEmployee.php";


$employees = [
    new FullTimeEmployee("Julie Ann MOLINA", 401, "Manager", 60000),
    new PartTimeEmployee("Jaymark Antonio", 402, "Receptionis", 200, 90),
    new ContractEmployee("Rickmar Turot", 403, "Designer", 80000),
    new FullTimeEmployee("Lovelyn Malanot", 404, "Asisstant ", 45000),
    new PartTimeEmployee("Vince Arnedo", 106, "", 150, 90),
];


foreach ($employees as $employee) {
    echo $employee->getInfo() . "<br>";
    echo "Salary: " . $employee->getSalary() . "<br>";

    
    if ($employee instanceof Bonus) {
        echo "Bonus: " . $employee->calculateBonus() . "<br>";
    }
    echo "<br>";
}
?>
