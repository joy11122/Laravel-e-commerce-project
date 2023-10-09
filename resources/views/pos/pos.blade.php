@extends('backend.layout')
@section('content')
    <div class="col-md-8  col-sm-12 w-100 d-flex p-2">
        <div class="col-md-8 col-sm-12 ">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card recent-sales overflow-auto">

                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>

                                <th scope="col">description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row"><a href="#"></a>{{ $item->id }}</th>

                                    <th scope="row"><a href="#"></a>{{ $item->name }}</th>
                                    <td>{{ $item->title }}</td>
                                    <td><a href="#" class="text-primary">{{ $item->price }}</a>
                                    </td>
                                    <td>{{ $item->status }}</td>

                                    <td><span class=" bg-success">{{ $item->description }}</span></td>
                                    <td><a href="{{ url('cart' . $item->id) }}" class="btn btn-danger">Addtocart</a>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>

                </div>

            </div>

        </div>

        <div class="col-md-4 col-sm-12 bg-dark text-light p-2 ">
            <h3 class="text-center">AddCustomer</h3>
            <select class="form-select form-select-sm mb-2" name="brand">
                <option value="">Select Anyone</option>
                @foreach ($customer as $customers)
                    <option value="">{{ $customers->name }}</option>
                @endforeach
            </select>
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr class="table-danger">
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $cart)
                        <tr>

                            <td scope="row">{{ $cart->name }}</td>
                            <td>{{ $cart->price }}</td>
                            <td>{{ $cart->quantity }}</td>


                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="1">Total</td>
                        <td colspan="2"class="table-primary">{{ $sum }}</td>
                    </tr>
                    <tr>
                        <td colspan="1">Vat</td>
                        <td colspan="2"class="text-danger">{{ $vat }}</td>
                    </tr>
                    <tr>
                        <td colspan="1" class="table-success">Subtotal</td>
                        <td colspan="2"class="table-dark text-bold text-light">{{ $subtotal }}</td>
                    </tr>
                    <tr>
                        <td colspan="1"> <a href="" class="btn btn-danger">Hold Order</a></td>
                        <td colspan="2"><a href=""class="btn btn-success">place Oreder</a></td>
                    </tr>
                </tbody>
            </table>



        </div>
    @endsection
