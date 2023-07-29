<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;
use App\Models\Post;

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

    public function post_create(){
        $employees = employees::all();
        return view('employees.post', compact('employees'));
    }
    public function post_store(Request $request){
        $request->validate([
            'registration_no' => 'required|exists:employees,registration_no',
            'post' => 'required',
        ]);

        $employee = employees::where('registration_no', $request->registration_no)->firstOrFail();
        
        $post = new Post([
            'post' => $request->post,
        ]);
        
        $post->registration_no = $request->registration_no;
        $post->name = $employee->name;

        $post->save();

        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }


    public function edit(employees $emp){
        return view('employees.edit', compact('emp'));
    }

    public function updated(Request $request, int $find){
        $emp = employees::find($find);
        $data = $request->validate([
            'name' => 'required|alpha_spaces',
            'reg-no' => "required|unique:employees,registration_no,{$emp->registration_no},registration_no|numeric",
            'role' => 'required'
        ]);

        if(!$find){
            echo "No Data found!!";
        }

        $emp->name = $data['name'];
        $emp->registration_no = $data['reg-no'];
        $emp->role = $data['role'];

        $emp->save();

        return redirect(route('employees.index'))->with('success', 'Employee Details updated Successfully!!');
    }

    public function destroy(int $del){
        $emp = employees::find($del); 
        $emp->delete();
        return redirect(route('employees.index'))->with('destroy', 'Employee Details deleted Successfully!!');
    }
}
