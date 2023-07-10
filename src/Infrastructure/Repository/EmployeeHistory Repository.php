<?php
namespace Infrastructure\Repository;

use Domain\Model\EmployeeHistory;

interface EmployeeHistoryRepository
{
    public function save(EmployeeHistory $employeeHistory);
    public function getHistoriesByEmployeeId($employeeId);
}
