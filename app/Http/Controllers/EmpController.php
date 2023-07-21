<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class EmpController extends Controller
{
    //
    public function index(){
        $emp = employees::all();
        return view('employees.index', ['emp' => $emp]);
    }

    public function add(){
        return view('employees.add');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|alpha_spaces',
            'reg-no' => 'required|unique:employees,registration_no|numeric',
            'role' => 'required'
        ]);

        $newEmp = employees::create([
            'name' => $data['name'],
            'registration_no' => $data['reg-no'],
            'role' => $data['role']
        ]);

        return redirect(route('employees.index'))->with('success', 'Employee Details added Successfully!!');
    }

    public function edit(employees $emp){
        return view('employees.edit', compact('emp'));
    }

    public function updated(Request $request, employees $emp){
        $data = $request->validate([
            'name' => 'required|alpha_spaces',
            'reg-no' => "required|unique:employees,registration_no,{$emp->registration_no},registration_no|numeric",
            'role' => 'required'
        ]);

        if(!$emp){
            echo "No Data found!!";
        }

        $emp->name = $data['name'];
        $emp->registration_no = $data['reg-no'];
        $emp->role = $data['role'];

        $emp->save();

        return redirect(route('employees.index'))->with('success', 'Employee Details updated Successfully!!');
    }

    public function destroy(employees $emp){
        $emp->delete();
        return redirect(route('employees.index'))->with('destroy', 'Employee Details deleted Successfully!!');
    }
}
