<?php

namespace Infrastructure\Repository;

use Domain\Model\Employee;
use Domain\Repository\EmployeeRepository;
use PDO;

class PdoEmployeeRepository implements EmployeeRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function save(Employee $employee): void
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO employees (name, joining_year, department, birthdate) VALUES (:name, :joining_year, :department, :birthdate)"
        );

        $stmt->execute([
            ':name' => $employee->getName(),
            ':joining_year' => $employee->getJoiningYear(),
            ':department' => $employee->getDepartment(),
            ':birthdate' => $employee->getBirthdate(),
        ]);
    }
}
