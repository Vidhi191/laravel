<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;


class EmployeeController extends Controller
{
    //// Create
    public function create(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->department = $request->department;
        $employee->save();

        return response()->json(['message' => 'Employee created successfully!']);
    }

    // Read
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }

    // Update
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->name = $request->name ?? $employee->name;
            $employee->age = $request->age ?? $employee->age;
            $employee->department = $request->department ?? $employee->department;
            $employee->save();

            return response()->json(['message' => 'Employee updated successfully!']);
        }

        return response()->json(['message' => 'Employee not found!'], 404);
    }

    // Delete
    public function delete($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return response()->json(['message' => 'Employee deleted successfully!']);
        }

        return response()->json(['message' => 'Employee not found!'], 404);
    }
}
