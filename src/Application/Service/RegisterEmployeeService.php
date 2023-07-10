<?php
namespace Application\Service;

use Domain\Model\Employee;
use Domain\Model\EmployeeHistory;
use Infrastructure\Repository\EmployeeRepository;
use Infrastructure\Repository\EmployeeHistoryRepository;

class RegisterEmployeeService
{
    private $employeeRepo;
    private $employeeHistoryRepo;

    public function __construct(EmployeeRepository $employeeRepo, EmployeeHistoryRepository $employeeHistoryRepo)
    {
        $this->employeeRepo = $employeeRepo;
        $this->employeeHistoryRepo = $employeeHistoryRepo;
    }

    public function execute($name, $dob, $department)
    {
        $latestEmployeeId = $this->employeeRepo->getLatestId();
        $employeeNumber = $dob . $latestEmployeeId;
        
        $employee = new Employee($employeeNumber, $name, $dob, $department);
        $this->employeeRepo->save($employee);
        
        // create EmployeeHistory for the current department as the initial history
        $employeeHistory = new EmployeeHistory($employeeNumber, $department, date('Y-m-d'), null);
        $this->employeeHistoryRepo->save($employeeHistory);
    }
}
