<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function list(){
        $employees=Employe::paginate(10);
        return view('backend.page.employees.list',compact('employees'));
    }
    public function form(){
        return view('backend.page.employees.form');
    }
    public function store(Request $request){
        $request->validate([
            'employees_name'=>'required',
            'company_id'=>'required',
            'email'=>'required',
            'phone'=>'required',  
        ]);

        Employe::create([
            'employees_name'=>$request->employees_name,
             'company_id'=>$request->company_id,
             'email'=>$request->email,
             'phone'=>$request->phone,

        ]);

       return redirect()->route('employees.list');

    }
    public function view($id){
        $employees=Employe::find($id);
        return view('backend.page.employees.view',compact('employees'));
    }
    public function delete($id){
        $employees=Employe::find($id)->delete();
        return redirect()->route('employees.list');

    }
    public function edit($id){
        $employees=Employe::find($id);
        return view('backend.page.employees.edit',compact('employees'));
    }
    public function update(Request $request,$id){
        $employees=Employe::find($id);

        $employees->update([
            'employees_name'=>$request->employees_name,
            'company_id'=>$request->company_id,
            'email'=>$request->email,
            'phone'=>$request->phone,  
        ]);
        return redirect()->route('employees.list');
}
}
