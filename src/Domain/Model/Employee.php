<?php

namespace Domain\Model;

class Employee
{
    private string $name;
    private int $joinYear;
    private string $department;
    private string $birthdate;

    public function __construnst(string $name, int $joinYear, string $department, string $birthdate)
    {
        $this->name = $name;
        $this->joinYear = $joinYear;
        $this->department = $department;
        $this->birthdate = $birthdate;
    }
}

?>