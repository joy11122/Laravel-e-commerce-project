@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row g y-3 pb-5 pt-3">
            <div class="col-md-12 pt-1">
                <h2 class="text-center bg-info mb-4">Add Product</h2>
            </div>
            <form action="{{ url('productstore') }}" method="post" class="row g y-3 bg-dark text-light p-4">
                @csrf
                @method('post')
                <div class="col-md-6">
                    <label for="" class="form-label">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name">
                    @error('name')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Title</label>
                    <input class="form-control" type="text" name="title" placeholder="title">
                    @error('title')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="col-md-12">
                    <label for="" class="form-label">Description</label>
                    <input class="form-control" type="text" name="description" placeholder="Description">
                    @error('description')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Meta Description</label>
                    <input class="form-control" type="text" name="mdescription" placeholder="Meta description">
                     @error('mdescription')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Discount</label>
                    <input class="form-control" type="number" name="discount" placeholder="Discount">
                    @error('discount')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Price</label>
                    <input class="form-control" type="number" name="price" placeholder="Price" value="0">

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
                    <input class="form-control" type="text" name="mtitle" placeholder="Meta Title">
                    @error('mtitle')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Slug</label>
                    <input class="form-control" type="text" name="slug" placeholder="Slug">
                    @error('slug')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="" class="form-label">Model</label>
                    <input class="form-control" type="text" name="model" placeholder="model">
                    @error('model')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" placeholder="image">
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
@endsection
