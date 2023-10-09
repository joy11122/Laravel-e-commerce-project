
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center bg-info">All Employee</h2>
            <a href="{{ url('createemployee') }}"class="btn btn-sm btn-primary float-end m-1">Add Employee</a>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
          <table class="table table-bordered table-hover text-center overflow-hidden ">
            <thead>
                <tr class="table-danger">
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Shift</th>
                    <th>Salary</th>
                    <th>Joining date</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->shift}}</td>
                    <td>{{ $item->salary }}</td>
                    <td>{{ $item->joining_date }}</td>

                    <td>
                        <a href="{{ url('employeeedit'.$item->id)}}"class="btn btn-sm btn-primary">Edit</a>

                    </td>
                    <td>
                        <form action="{{url('employeedelete'.$item->id)}}" method="post">
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
