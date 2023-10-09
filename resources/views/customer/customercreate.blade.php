@extends('backend.layout'))
@section('content')
    <div class="container-fluid bg-dark text-light py-3">
        <header class="display-6">
            <h3 class="text-center text-primary">CUSTOMER INFORMATION</h3>
        </header>
        <section class="container bg-dark text-light p-2 my-3 w-50">
            <form action="{{url('/customerstore')}}" class="row g-3" method="post">
                @csrf
                @method('post')
                <div class="col-6 ">
                    <label for="" class="form-label">NAME</label>
                    <input name="name" type="text" class="form-control" placeholder="Customer name">
                </div>

                <div class="col-6 ">
                    <label for="" class="form-label">EMAIL</label>
                    <input name="email" type="text" class="form-control"placeholder="Customer email">
                </div>

                <div class="col-12 ">
                    <label for="" class="form-label">PHONE</label>
                    <input name="phone" type="text" class="form-control"placeholder="Customer phone">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">CITY</label>
                    <input name="city" type="text" class="form-control"placeholder="Customer city">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">BANK ACCOUNT</label>
                    <input name="bank_account" type="text" class="form-control"placeholder="Customer bank account">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">NID NO</label>
                    <input name="nid_no" type="text" class="form-control"placeholder="Customer nid no">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">ADDRESS</label>
                    <input name="address" type="text" class="form-control"placeholder="Customer address">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">SHOPNAME</label>
                    <input name="shop_name" type="text" class="form-control"placeholder="Customer shopname">
                </div>

                <div class="col-12 ">
                    <button class="btn btn-danger btn-outline"> Add Customer</button>
                </div>


            </form>
        </section>




    </div>
@endsection
