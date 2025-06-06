<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::create([
            'name' => 'James Montealto',
            'position' => 'Web Developer',
            'salary' => 50000,
        ]);

        Employee::create([
            'name' => 'Shirah Rahiol',
            'position' => 'Chemist',
            'salary' => 45000,
        ]);
    }
}
