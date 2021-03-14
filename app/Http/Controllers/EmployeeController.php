<?php
namespace App\Http\Controllers;


class EmployeeController extends Controller
{
    private $employees;

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

    public function showOne($id)
    {
        if (isset($this->employees[$id]))
        {
            return "Name: {$this->employees[$id]['name']};<br>Surname: {$this->employees[$id]['surname']};<br>Salary: {$this->employees[$id]['salary']};";
        } else {
            return "There is no such employee";
        }

    }

    public function showField($id, $field)
    {
        if (isset($this->employees[$id]))
        {
            return ucfirst($field) . ': ' . $this->employees[$id][$field];
        } else {
            return "There is no such employee";
        }
    }
}
