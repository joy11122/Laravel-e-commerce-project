<?php

namespace App\Http\Controllers;

use App\Models\Expencess;
use Illuminate\Http\Request;
use App\Http\Requests\expencessRequest;

class expencessController extends Controller
{
    public function today(){
        $alldata=Expencess::all();
         $date = date("d-m-y");
        $data=Expencess::where('date',$date)->sum('amount');

        return view('expencess.today',compact('data','alldata'));
     }

   public function create(){
      return view('expencess.createexpencess');
  }


    public function store(expencessRequest $request ){

                $validatedData=$request->validated();

                  $data=new Expencess;
                  $data->details=$validatedData['details'];
                  $data->amount=$validatedData['amount'];
                  $data->date=($validatedData['date']);
                  $data->month=$validatedData['month'];
                  $data->year=$validatedData['year'];

                  $data->save();

              return redirect()->back();
   }


    public function edit($id){
        $data = expencess::find($id);
        return view('expencess.expencessedit', compact('data'));
    }


    public function update($id,expencessRequest $request){

        $validatedData=$request->validated();

        $data = Expencess::find($id);

        $data->details=$validatedData['details'];
        $data->amount=$validatedData['amount'];
        $data->date=($validatedData['date']);
        $data->month=$validatedData['month'];
        $data->year=$validatedData['year'];
        $data->update();
        return redirect()->back();
    }


    public function delete($id){
        $data = Expencess::findOrfail($id);
        $data->delete();
        return redirect('/today')->with('message',' Data Deleted Succesfully!!!');
    }


     public function thismonth(){
         $date = date("F");
        $data=Expencess::where('date',$date)->sum('amount');
         return redirect('/expencess',compact('data'));
     }
     public function thisyear(){
         $date = date("Y");
        $data=Expencess::where('date',$date)->sum('amount');
         return redirect('/expencess',compact('data'));
     }
}
