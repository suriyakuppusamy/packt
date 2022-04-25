<?php

namespace App\Http\Controllers;
use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
  
    public function index()
    {
        $employees = user::all();
      return view ('employees.index')->with('employees', $employees);
    }

    
    public function create()
    {
        return view('employees.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        user::create($input);
        return redirect('employees')->with('flash_message', 'employees Addedd!');  
    }

    
    public function show($id)
    {
        $employees = user::find($id);
        return view('employees.show')->with('employees', $employees);
    }

    
    public function edit($id)
    {
        $employees = user::find($id);
        return view('employees.edit')->with('employees', $employees);
    }

  
    public function update(Request $request, $id)
    {
        $employees = user::find($id);
        $input = $request->all();
        $employees->update($input);
        return redirect('employees')->with('flash_message', 'employees Updated!');  
    }

   
    public function destroy($id)
    {
        user::destroy($id);
        return redirect('employees')->with('flash_message', 'employees deleted!');  
    }
}