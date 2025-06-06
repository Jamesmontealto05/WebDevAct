<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'John Doe',
            'position' => 'Manager',
            'salary' => 50000,
        ]);

        Employee::create([
            'name' => 'Jane Smith',
            'position' => 'Developer',
            'salary' => 45000,
        ]);
    }
}
