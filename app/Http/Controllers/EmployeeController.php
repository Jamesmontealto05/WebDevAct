<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
{
    $employees = \App\Models\Employee::all();
    return view('employees.index', compact('employees'));
}

public function create()
{
    return view('employees.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'salary' => 'required|numeric',
    ]);

    \App\Models\Employee::create($validated);

    return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
}
}