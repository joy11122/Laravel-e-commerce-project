<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;


class productController extends Controller
{
    public function index(){
        $data=Product::paginate(15);

        return view('product.allproduct',compact('data'));
    }


    public function create(){
        $brand=brand::all();
        $category=Category::all();

        return view('product.productCreate',compact('brand','category'));
    }


    public function store(ProductRequest $request ){
                $validatedData=$request->validated();
                $product=new Product;
                $product->name=$validatedData['name'];

                $product->title=$validatedData['title'];
                $product->mtitle=$validatedData['mtitle'];
                $product->discount=$validatedData['discount'];
                $product->description=$validatedData['description'];
                $product->mdescription=$validatedData['mdescription'];
                $product->price=$request->price;

                $product->model=$validatedData['model'];
                $product->brand=$request->brand;
                $product->category=$request->category;
                $product->slug=Str::slug($validatedData['slug']);


                    if($request->hasFile('image')){
                        $file=$request->file('image');
                        $ext=$file->getClientOriginalExtension();
                        $filename=time().'.'.$ext;
                        $file->move('images',$filename);
                        $product->image=$filename;
                       }
                       $product->image=$validatedData['image'];

                $product->save();

                return redirect('/product')->with('message',' data added succesfully!!!');
    }


    public function edit($id){
        $data = Product::find($id);
        $brand=brand::all();
        $category=Category::all();
        return view('product.edit', compact('data','brand','category'));
    }


    public function update($id,ProductRequest $request){

        $validatedData=$request->validated();
        $product = Product::find($id);
        $product->name=$validatedData['name'];

        $product->title=$validatedData['name'];
                $product->title=$validatedData['title'];
                $product->mtitle=$validatedData['mtitle'];
                $product->discount=$validatedData['discount'];
                $product->description=$validatedData['description'];
                $product->mdescription=$validatedData['mdescription'];
                $product->price=$request->price;

                $product->model=$validatedData['model'];
                $product->brand=$request->brand;
                $product->category=$request->category;
                $product->slug=Str::slug($validatedData['slug']);


                    if($request->hasFile('image')){
                        $file=$request->file('image');
                        $ext=$file->getClientOriginalExtension();
                        $filename=time().'.'.$ext;
                        $file->move('images',$filename);
                        $product->image=$filename;
                       }
                $product->image=$product->image;

                $product->update();

        return redirect('/product')->with('message',' Data Updated Succesfully!!!');
    }


    public function delete($id){
        $data = Product::findOrfail($id);
        $data->delete();
        return redirect('/product')->with('message',' Data Deleted Succesfully!!!');
    }

}
