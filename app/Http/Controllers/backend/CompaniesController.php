<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function list(){
        $companies=Company::paginate(10);
        return view('backend.page.companies.list',compact('companies'));
    }
    public function form(){
        return view('backend.page.companies.form');
    }
    public function store(Request $request){
        $request->validate([
            'compony_name'=>'required',
            'email'=>'required',
            'logo'=>'required',
            'website'=>'required',  
        ]);

        Company::create([
            'compony_name'=>$request->compony_name,
             'email'=>$request->email,
             'logo'=>$request->logo,
             'website'=>$request->website,

        ]);

       return redirect()->route('list');

    }
    public function view($id){
        $companies=Company::find($id);
        return view('backend.page.companies.view',compact('companies'));
    }
    public function delete($id){
        $companies=Company::find($id)->delete();
        return redirect()->route('list');

    }
    public function edit($id){
        $companies=Company::find($id);
        return view('backend.page.companies.edit',compact('companies'));
    }
    public function update(Request $request,$id){
        $companies=Company::find($id);

        $companies->update([
            'compony_name'=>$request->compony_name,
            'email'=>$request->email,
            'logo'=>$request->logo,
            'website'=>$request->website,
        ]);
        return redirect()->route('list');
}
}