
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto bg-info p-5">
            <h1 class="text-center">Edit Category</h1>
            <a href="{{ url('category')}}"class="btn btn-sm btn-primary float-end mb-2">Back</a>

        <form action="{{ url('update'.$data->id)}}" method="post">
            @csrf
            @method('put')
            <label for="">NAME</label>
        <input type="text" class="form-control" value="{{ $data->name }}" name="name" > <br>
        <label for="">TITLE</label><br>
        <input type="text" class="form-control" value="{{ $data->title }}" name="title" > <br>
        <label for="">SLUG</label><br>
        <input type="text" class="form-control" value="{{ $data->slug}}"name="slug" > <br>
        <label for="">SHOW OR HIDE</label><br>
        <input type="checkbox"name="status" value="{{ $data->status }}" > <br>
<button type="submit" class="btn btn-sm btn-success">add category</button>
        </form>
        </div>
    </div>
</div>
@endsection
