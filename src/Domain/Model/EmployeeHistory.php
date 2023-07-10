<?php
namespace Domain\Model;

class EmployeeHistory
{
    private $employeeId;
    private $department;
    private $startDate;
    private $endDate;

    public function __construct($employeeId, $department, $startDate, $endDate)
    {
        $this->employeeId = $employeeId;
        $this->department = $department;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    // Getter methods...
}