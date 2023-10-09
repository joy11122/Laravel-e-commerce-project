<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\brandRequest;

class brandController extends Controller
{
    public function index(){
        $data=brand::paginate(10);
        return view('brand.allbrand',compact('data'));
    }


    public function create(){
        return view('brand.brandCreate');
    }


    public function store(brandRequest $request ){
                $validatedData=$request->validated();
                $Category=new brand;
                $Category->name=$validatedData['name'];

                $Category->title=$validatedData['title'];
                $Category->slug=Str::slug($validatedData['slug']);
                $Category->status=$request->status ==true? '1':'0';
                $Category->save();

               return redirect('/brands')->with('message',' data added succesfully!!!');
    }


    public function edit($id){
        $data = brand::find($id);
        return view('brand.edit', compact('data'));
    }


    public function update($id,brandRequest $request){

        $validateData=$request->validated();
        $data = brand::find($id);
        $data->name=$validateData['name'];
        $data->title=$validateData['title'];
        $data->slug=Str::slug($validateData['slug']);
        $data->status=$request->status ==true? '1':'0';
        $data->update();

        return redirect('/brands')->with('message',' Data Updated Succesfully!!!');
    }


    public function delete($id){
        $data = brand::findOrfail($id);
        $data->delete();
        return redirect('/brands')->with('message',' Data Deleted Succesfully!!!');
    }
}
