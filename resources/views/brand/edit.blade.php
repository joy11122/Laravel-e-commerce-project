
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto bg-info p-5">
            <h3 class="text-center">Edit Brand</h3>
            <a href="{{ url('brand')}}"class="btn btn-sm btn-primary float-end mb-2">Back</a>

        <form action="{{ url('brandupdate'.$data->id)}}" method="post">
            @csrf
            @method('put')
            <label for="">BrandName</label>
        <input type="text" class="form-control" value="{{ $data->name }}" name="name" > <br>
        <label for="">TITLE</label><br>
        <input type="text" class="form-control" value="{{ $data->title }}" name="title" > <br>
        <label for="">SLUG</label><br>
        <input type="text" class="form-control" value="{{ $data->slug}}"name="slug" > <br>
        <label for="">SHOW OR HIDE</label><br>
        <input type="checkbox"name="status" value="{{ $data->status }}" > <br>
<button type="submit" class="btn btn-sm btn-success">Edit Brand</button>
        </form>
        </div>
    </div>
</div>
@endsection
