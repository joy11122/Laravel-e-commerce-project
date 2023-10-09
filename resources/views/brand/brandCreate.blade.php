@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto bg-info p-5">
                <h1 class="text-center mb-2">Add Brand</h1>
                <a href=""class="btn btn-sm btn-primary float-end mb-2">Back</a>
                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <form action="{{ url('/brandstore') }}" method="post">
                    @csrf
                    @method('post')
                    <label for=""> BrandName</label>
                    <input type="text" class="form-control" name="name" placeholder="Brand name"> <br>
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror

                    <label for="title">TITLE</label><br>
                    <input type="text" class="form-control" name="title" placeholder="Brand title"> <br>
                    @error('title')
                        <span>{{ $message }}</span>
                    @enderror
                    <label for="slug">SLUG</label><br>
                    <input type="text" class="form-control" name="slug" placeholder="Brand slug"> <br>
                    @error('slug')
                        <span>{{ $message }}</span>
                    @enderror
                    <label for="show">SHOW OR HIDE</label><br>
                    <input type="checkbox"name="status"> <br>

                    <button type="submit" class="btn btn-sm btn-success">Add Brand</button>
                </form>
            </div>
        </div>
    </div>
@endsection
