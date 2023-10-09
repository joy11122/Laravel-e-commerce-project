@extends('backend.layout')

@section('content')
    <div class="container-fluid bg-dark text-light py-3">
        <header class="display-6">
            <h2 class="text-center">CUSTOMER EDIT</h2>
        </header>
        <section class="container bg-dark text-light p-2 my-3 w-50">
            <form action="{{url('/customerupdate'.$data->id)}}" class="row g-3" method="post">
                @csrf
                @method('put')
                <div class="col-6 ">
                    <label for="" class="form-label">NAME</label>
                    <input name="name" value="{{ $data->name }}" type="text" class="form-control" placeholder="Customer name">

                </div>

                <div class="col-6 ">
                    <label for="" class="form-label">EMAIL</label>
                    <input name="email" type="text" value="{{ $data->email }}"class="form-control"placeholder="Customer email">
                </div>

                <div class="col-12 ">
                    <label for="" class="form-label">PHONE</label>
                    <input name="phone" type="text" value="{{ $data->phone }}"class="form-control"placeholder="Customer phone">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">CITY</label>
                    <input name="city" type="text"value="{{ $data->city }}" class="form-control"placeholder="Customer city">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">BANK ACCOUNT</label>
                    <input name="bank_account"value="{{ $data->bank_account }}" type="text" class="form-control"placeholder="Customer bank account">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">NID NO</label>
                    <input name="nid_no" type="text" value="{{ $data->nid_no }}"class="form-control"placeholder="Customer nid no">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">ADDRESS</label>
                    <input name="address" type="text"value="{{ $data->address }}" class="form-control"placeholder="Customer address">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">SHOPNAME</label>
                    <input name="shop_name" type="text"value="{{ $data->shop_name }}" class="form-control"placeholder="Customer shopname">
                </div>



                <div class="col-12 ">
                    <button class="btn btn-danger btn-outline"> Edit Customer</button>
                </div>


            </form>
        </section>




    </div>
@endsection
