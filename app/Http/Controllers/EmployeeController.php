<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\employeeRequest;

class EmployeeController extends Controller
{

    public function index(){
        $data=Employee::paginate(10);
        return view('employee.allemployee',compact('data'));
    }


   public function create(){
      return view('employee.employeecreate');
  }


    public function store(employeeRequest $request ){

                $validatedData=$request->validated();

                  $data=new Employee;
                  $data->name=$validatedData['name'];
                  $data->email=$validatedData['email'];
                  $data->phone=($validatedData['phone']);
                  $data->city=$validatedData['city'];
                  $data->shift=$validatedData['shift'];
                  $data->bank_account=($validatedData['bank_account']);
                  $data->address=$validatedData['address'];
                  $data->nid_no=$validatedData['nid_no'];
                  $data->salary=$validatedData['salary'];
                  $data->joining_date=$validatedData['joining_date'];
                  $data->save();

              return redirect('/employee')->with('message',' data added succesfully!!!');
   }


    public function edit($id){
        $data = Employee::find($id);
        return view('employee.editemployee', compact('data'));
    }


    public function update($id,employeeRequest $request){

        $validatedData=$request->validated();

        $data = Employee::find($id);

        $data->name=$validatedData['name'];
        $data->email=$validatedData['email'];
        $data->phone=($validatedData['phone']);
        $data->city=$validatedData['city'];
        $data->shift=$validatedData['shift'];
        $data->bank_account=($validatedData['bank_account']);
        $data->address=$validatedData['address'];
        $data->nid_no=$validatedData['nid_no'];
        $data->salary=$validatedData['salary'];
        $data->joining_date=$validatedData['joining_date'];
        $data->update();

        return redirect('/employee')->with('message',' Data Updated Succesfully!!!');
    }


    public function delete($id){
        $data = Employee::findOrfail($id);
        $data->delete();
        return redirect('/employee')->with('message',' Data Deleted Succesfully!!!');
    }
}
