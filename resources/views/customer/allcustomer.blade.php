
@extends('backend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bg-info">All Customer</h1>
            <a href="{{ url('createcustomer') }}"class="btn btn-sm btn-primary float-end m-1">Add Customer</a>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
          <table class="table table-bordered table-hover text-center overflow-hidden ">
            <thead>
                <tr class="table-danger">

                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Shop name</th>
                    <th>Bank Acoount</th>
                    <th>Nid no</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item )
                <tr>
                  
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->shop_name }}</td>
                    <td>{{ $item->nid_no }}</td>
                    <td>{{ $item->bank_account }}</td>

                    <td>
                        <a href="{{ url('customeredit'.$item->id)}}"class="btn btn-sm btn-primary">Edit</a>

                    </td>
                    <td>
                        <form action="{{url('customerdelete'.$item->id)}}" method="post">
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
