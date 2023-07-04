<?php

namespace Tests\Unit\Application\Service;

use Domain\Model\Employee;
use Domain\Repository\EmployeeRepository;
use Application\Service\RegisterEmployeeService;
use PHPUnit\Framework\TestCase;

class RegisterEmployeeServiceTest extends TestCase
{
    public function testExecute(): void
    {
        $repository = $this->createMock(EmployeeRepository::class);
        $repository->expects($this->once())
                   ->method('save')
                   ->with($this->isInstanceOf(Employee::class));

        $service = new RegisterEmployeeService($repository);
        $service->execute('John Doe', 2023, 'Engineering', '1990-01-01');
    }
}