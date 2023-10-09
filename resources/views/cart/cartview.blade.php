
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bg-info">Cart List</h1>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
          <table class="table table-bordered table-hover text-center overflow-hidden ">
            <thead>
                <tr class="table-danger">
                    <th>id</th>
                    <th>Name</th>
                    <th>title</th>
                    <th>price</th>
                    <th>quantity</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>


                    <td>
                        <a href="{{ url('cartedit'.$item->id)}}"class="btn btn-sm btn-primary">Edit</a>

                    </td>
                    <td>
                        <form action="{{url('cartdelete'.$item->id)}}" method="post">
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

@endsection --}}
