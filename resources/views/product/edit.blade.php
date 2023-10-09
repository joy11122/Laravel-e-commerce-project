
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 bg-dark text-light mx-auto p-5">
            <h2 class="text-center text-danger">Edit Product</h2>
            <a href="{{ url('product')}}"class="btn btn-sm btn-primary float-end">Back</a>

         <form action="{{ url('productupdate'.$data->id)}}" method="post" class="bg-dark text-light row g y-2">
            @csrf
            @method('put')
            <div class="col-md-6">
                <label for="" class="form-label">Name</label>
                <input class="form-control" type="text" name="name" value="{{ $data->name }}" placeholder="Name">
                @error('name')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="" class="form-label">Title</label>
                <input class="form-control" type="text" name="title" value="{{ $data->title }}"  placeholder="title">
                @error('title')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>


            <div class="col-md-12">
                <label for="" class="form-label">Description</label>
                <input class="form-control" type="text" name="description" value="{{ $data->description }}"  placeholder="Description">
                @error('description')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Meta Description</label>
                <input class="form-control" type="text" name="mdescription"  value="{{ $data->mdescription }}" placeholder="Meta description">
                 @error('mdescription')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Discount</label>
                <input class="form-control" type="number" name="discount" value="{{ $data->discount }}"  placeholder="Discount">
                @error('discount')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Price</label>
                <input class="form-control" type="number" name="price" value="{{ $data->price }}"  placeholder="Price" value="0">

            </div>
            <div class="col-md-4">
                <label for=""class="form-label">Brand</label>
                <select class="form-select form-select-sm" name="brand">
                    <option value="">Select Anyone</option>

                    @foreach ($brand as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-4">
                <label for=""class="form-label">Category</label>
                <select class="form-select form-select-sm" name="category">
                    <option value="">Select Anyone</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Meta Title</label>
                <input class="form-control" type="text" name="mtitle" value="{{ $data->mtitle }}"  placeholder="Meta Title">
                @error('mtitle')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Slug</label>
                <input class="form-control" type="text" name="slug" value="{{ $data->slug }}"  placeholder="Slug">
                @error('slug')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="" class="form-label">Model</label>
                <input class="form-control" type="text" name="model" value="{{ $data->model }}"  placeholder="model">
                @error('model')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" value="{{ asset("images/$data->image")}}">
                @error('image')
                <span class="alert alert-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <input type="submit" value="Add Produc" class="btn btn-sm btn-danger mt-3">
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
