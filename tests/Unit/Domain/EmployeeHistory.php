<?php
use PHPUnit\Framework\TestCase;
use Domain\Model\EmployeeHistory;

class EmployeeHistoryTest extends TestCase
{
    public function testCanBeCreatedFromValidParameters()
    {
        $employeeHistory = new EmployeeHistory('20230701001', 'Engineering', '2023-07-01', null);

        $this->assertInstanceOf(EmployeeHistory::class, $employeeHistory);
    }
}
