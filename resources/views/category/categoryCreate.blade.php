@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto bg-info p-5">
                <h1 class="text-center">Add Category</h1>
                <a href=""class="btn btn-sm btn-primary float-end mb-2">Back</a>

                <form action="{{ url('categorystore') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="">NAME</label>
                    <input type="text" class="form-control" name="name" placeholder="Category name"> <br>
                    <label for="">TITLE</label><br>
                    <input type="text" class="form-control" name="title" placeholder="Category title"> <br>
                    <label for="">SLUG</label><br>
                    <input type="text" class="form-control" name="slug" placeholder="Category slug"> <br>
                    <label for="">SHOW OR HIDE</label><br>
                    <input type="checkbox"name="status"> <br>
                    <button type="submit" class="btn btn-sm btn-success">Add Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection
