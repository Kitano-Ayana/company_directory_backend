<?php

namespace Infrastructure\Persistence;

use Domain\Model\Employee;
use Infrastructure\Repository\EmployeeRepository;

class InMemoryEmployeeRepository implements EmployeeRepository
{
    private $employees = [];

}