
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1 class="text-center bg-info">All Category</h1>
            <a href="{{ url('createcategory') }}"class="btn btn-sm btn-primary float-end m-1">Add Category</a>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
          <table class="table table-bordered table-hover text-center ">
            <thead>
                <tr class="table-danger">
                    <th>Name</th>
                    <th>title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>
                        <a href="{{ url('edit'.$item->id)}}"class="btn btn-sm btn-primary">Edit</a>

                    </td>
                    <td>
                        <form action="{{url('delete'.$item->id)}}" method="post">
                        @csrf
                        @method('delete')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                    </form></td>
                </tr>

                @endforeach

            </tbody>
          </table>
          {{ $data->links() }}
        </div>
    </div>
</div>
{{ $data->links() }}
@endsection
