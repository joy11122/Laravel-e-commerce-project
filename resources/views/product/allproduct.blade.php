@extends('backend.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center bg-info">All Product</h1>
                <a href="{{ url('createproduct') }}"class="btn btn-sm btn-primary float-end mb-2 ">Add product</a>
                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered table-hover text-center overflow-hidden ">
                    <thead>
                        <tr class="table-danger">

                            <th>name</th>

                            <th>description</th>

                            <th>title</th>

                            <th>price</th>

                            <th>image</th>
                            <th>brand</th>
                            <th>category</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>

                                <td>{{ $item->name }}</td>

                                <td>{{ $item->description }}</td>
                                <td>{{ $item->title }}</td>

                                <td>{{ $item->price }}</td>



                                <td>{{ $item->image }}</td>
                                <td>{{ $item->brand }}</td>
                                <td>{{ $item->category }}</td>
                                <td class="d-flex">
                                    <div>
                                        <a
                                            href="{{ url('productedit' . $item->id) }}"class="btn btn-sm btn-primary">Edit</a>

                                    </div>
                                    <div>
                                        <form action="{{ url('productdelete' . $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection --}}
