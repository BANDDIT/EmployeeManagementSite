<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function Home(){
        $employees = Employee::all();
        $id=1;
        return view('home',compact('employees','id'));
    }

    public function AddPage(){
        return view('AddEmployee');
    }


    public function AddProcess(Request $request){
        $validated = $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|min:10|max:40',
            'nomorHP' => 'required|min:9|max:12|regex:/^08/'
        ]);

        Employee::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomorHP' => $request->nomorHP
        ]);
        return redirect("/");
    }

    public function Delete($id){
        Employee::destroy($id);
        return redirect("/");
    }

    public function UpdatePage($id){
        $employee = Employee::findorfail($id);
        return view('Update',compact('employee'));
    }

    public function UpdateProcess(Request $request, $id){
        $validated = $request->validate([
            'nama' => 'required|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|min:10|max:40',
            'nomorHP' => 'required|min:9|max:12|regex:/^08/'
        ]);

        Employee::find($id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomorHP' => $request->nomorHP
        ]);

        return redirect("/");
    }

    public function Search(Request $request){
        $employees = Employee::where('nama','regexp','^'.$request->searchName)->get();
        $id=1;
        return view('home',compact('employees','id'));
    }
}
