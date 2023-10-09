<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\customerRequest;

class customerController extends Controller
{
    public function index(){
        $data=Customer::paginate(10);
        return view('customer.allcustomer',compact('data'));
    }


   public function create(){
      return view('customer.customercreate');
  }


    public function store(customerRequest $request ){

                $validatedData=$request->validated();

                  $data=new Customer;
                  $data->name=$validatedData['name'];
                  $data->email=$validatedData['email'];
                  $data->phone=($validatedData['phone']);
                  $data->city=$validatedData['city'];
                  $data->shop_name=$validatedData['shop_name'];
                  $data->bank_account=($validatedData['bank_account']);
                  $data->address=$validatedData['address'];
                  $data->nid_no=$validatedData['nid_no'];
                  $data->save();

              return redirect('/customer')->with('message',' data added succesfully!!!');
   }


    public function edit($id){
        $data = Customer::find($id);
        return view('customer.editcustomer', compact('data'));
    }


    public function update($id,customerRequest $request){

        $validatedData=$request->validated();

        $data = Customer::find($id);
      
        $data->name=$validatedData['name'];
        $data->email=$validatedData['email'];
        $data->phone=$validatedData['phone'];
        $data->address=$validatedData['address'];
        $data->city=$validatedData['city'];
        $data->nid_no=$validatedData['nid_no'];
        $data->bank_account=$validatedData['bank_account'];
        $data->shop_name=$validatedData['shop_name'];
        $data->update();

        return redirect('/customer')->with('message',' Data Updated Succesfully!!!');
    }


    public function delete($id){
        $data = Customer::findOrfail($id);
        $data->delete();
        return redirect('/customer')->with('message',' Data Deleted Succesfully!!!');
    }
}
