<?php
use PHPUnit\Framework\TestCase;
use Application\Service\RegisterEmployeeService;
use Infrastructure\Repository\EmployeeRepository;
use Infrastructure\Repository\EmployeeHistoryRepository;

class RegisterEmployeeServiceTest extends TestCase
{
    public function testEmployeeCanRegister()
    {
        // Create a mock for the EmployeeRepository
        $employeeRepo = $this->createMock(EmployeeRepository::class);
        $employeeRepo->method('getLatestId')->willReturn('001');

        // Create a mock for the EmployeeHistoryRepository
        $employeeHistoryRepo = $this->createMock(EmployeeHistoryRepository::class);

        $registerEmployeeService = new RegisterEmployeeService($employeeRepo, $employeeHistoryRepo);

        // Assume there are no exceptions thrown, the test will pass
        $registerEmployeeService->execute('John Doe', '1990-01-01', 'Engineering');
    }
}
