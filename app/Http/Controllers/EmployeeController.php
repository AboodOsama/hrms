<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Session;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index()
    {

        $Employees = Employee::with('company')->orderby('id','DESC')->get();
        // $companies = Company::all();
        //return response($companies);
        return view('Employees.ListEmployees')->with('Employees', $Employees);
    }

    // Show the form for creating a new company
    public function create()
    {
        $company = Company::all();
        return view('Employees.EmployeeAdd')->with('companies', $company);
    }

    // Store a newly created Employee in storage
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'ename' => 'required|max:255',
            'sex' => 'required',
            'position' => 'max:255',
            'department' => 'max:255',
            'company_id' => 'required',
        ]);


        // Create the Employee
        $Employee = Employee::create($validatedData);

        // return response($Employee);
        return redirect('/employee/ListEmployees')->with('success', 'User added successfully.');
    }




    // Show the form for editing the specified Employee
    public function edit(Employee $Employee)
    {
        $Employee = Employee::find($Employee->id);
        $company = company::all();
        return view('Employees.EmployeeEdit', ['employee' => $Employee, 'companies' => $company]);
    }

    // Show the form for editing the specified Employee
    public function edit2(Employee $Employee, Session $Session)
    {
        $Employee = Employee::find($Employee->id);
        $company = company::all();
        return view('Employees.EmployeeEdit2', ['employee' => $Employee, 'companies' => $company , 'session' => $Session]);
    }



    // Update the specified employee in storage
    public function update(Request $request, Employee $Employee)
    {
        
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'ename' => 'required|max:255',
            'sex' => 'required',
            'position' => 'max:255',
            'department' => 'max:255',
            'company_id' => 'required',
        ]);

        


        // Update the Employee with the validated data
        $Employee->update($validatedData);

        // Redirect or return response
        return redirect('/employee/ListEmployees')->with('success', 'employee updated successfully.');
    }


    // Update the specified employee in storage
    public function update2(Request $request, Employee $Employee , Session $Session)
    {
        
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'ename' => 'required|max:255',
            'sex' => 'required',
            'position' => 'max:255',
            'department' => 'max:255',
            'company_id' => 'required',
        ]);

        


        // Update the Employee with the validated data
        $Employee->update($validatedData);

        $enrolled_employees = $Session->Employee()->get();
        
        return view('sessions.enrollments', [
            'session' => $Session,
            'employees' => $enrolled_employees
        ]);
    }

    // Remove the specified company from storage
    public function destroy(Employee $Employee)
    {
        $Employee->delete();

        return redirect('/employee/ListEmployees')->with('success', 'User deleted successfully!');
    }

}
