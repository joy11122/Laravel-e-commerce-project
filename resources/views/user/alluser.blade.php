
@extends('backend.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto bg-dark text-light ">
            <h2 class="text-center">All user</h2>
            <a href="{{ url('createuser') }}"class="btn btn-sm btn-primary float-end mb-2">Add user</a>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
          <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>RollAs</th>
                    <th>email</th>
                    <th>password</th>

                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <th>{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->rollAs }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td>

                    <td>
                        <a href="{{ url('useredit'.$item->id)}}"class="btn btn-sm btn-primary">Edit</a>
                    <td/>
                    <td>
                     <form action="{{url('userdelete'.$item->id)}}" method="post">
                     @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
                </tr>

                @endforeach

            </tbody>
          </table>

        </div>
    </div>
</div>

@endsection
