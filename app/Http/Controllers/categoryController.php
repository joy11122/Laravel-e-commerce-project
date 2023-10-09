<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\categoryController;

class categoryController extends Controller
{
    public function index(){
        $data=Category::paginate(15);
        return view('category.allcategory',compact('data'));
    }
    public function create(){
        return view('category.categoryCreate');
    }
            public function store(CategoryRequest $request ){
                $validatedData=$request->validated();
                $Category=new Category;
                $Category->name=$validatedData['name'];

                $Category->title=$validatedData['title'];
                $Category->slug=Str::slug($validatedData['slug']);
                $Category->status=$request->status ==true? '1':'0';
                $Category->save();
                return redirect('/category')->with('message',' data added succesfully!!!');
    }
    public function edit($id){
        $data = Category::find($id);
        return view('category.edit', compact('data'));


    }
    public function update($id,CategoryRequest $request){

        $validateData=$request->validated();
        $data = Category::find($id);
        $data->name=$validateData['name'];
        $data->title=$validateData['title'];
        $data->slug=Str::slug($validateData['slug']);
        $data->status=$request->status ==true? '1':'0';
        $data->update();
        return redirect('/category')->with('message',' data Updated succesfully!!!');


    }
    public function delete($id){
        $data = Category::findOrfail($id);
        $data->delete();
        return redirect('/category')->with('message',' data deleted succesfully!!!');
    }
}
