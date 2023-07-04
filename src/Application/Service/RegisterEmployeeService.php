<?php

use Domain\Model\Employee;
use Infrastructure\Repository\EmployeeRepository;

class RegisterEmployeeService
{
    private EmployeeRepository $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function execute(string $name, int $joiningYear, string $department, string $birthdate): void
    {
        $employee = new Employee($name, $joiningYear, $department, $birthdate);

        $this->employeeRepository->save($employee);
    }

}