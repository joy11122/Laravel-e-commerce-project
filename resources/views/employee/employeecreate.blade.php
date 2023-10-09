@extends('backend.layout'))
@section('content')
    <div class="container-fluid bg-dark text-light py-3">
        <header class="display-6">
            <h1 class="text-center">EMPLOYEE INFORMATION</h1>
        </header>
        <section class="container bg-dark text-light p-2 my-3 w-50">
            <form action="{{url('/employeestore')}}" class="row g-3" method="post">
                @csrf
                @method('post')
                <div class="col-6 ">
                    <label for="" class="form-label">NAME</label>
                    <input name="name" type="text" class="form-control" placeholder="Employee name">
                </div>

                <div class="col-6 ">
                    <label for="" class="form-label">EMAIL</label>
                    <input name="email" type="text" class="form-control"placeholder="Employee email">
                </div>

                <div class="col-12 ">
                    <label for="" class="form-label">PHONE</label>
                    <input name="phone" type="text" class="form-control"placeholder="Employee phone">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">CITY</label>
                    <input name="city" type="text" class="form-control"placeholder="Employee city">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">BANK ACCOUNT</label>
                    <input name="bank_account" type="text" class="form-control"placeholder="Employee bank account">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">NID NO</label>
                    <input name="nid_no" type="text" class="form-control"placeholder="Employee nid no">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">ADDRESS</label>
                    <input name="address" type="text" class="form-control"placeholder="Employee address">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">SALARY</label>
                    <input name="salary" type="text" class="form-control"placeholder="Employee salary">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">SHIFT</label>
                    <input name="shift" type="text" class="form-control"placeholder="Employee shift">
                </div>
                <div class="col-12 ">
                    <label for="" class="form-label">JOINING DATE</label>
                    <input name="joining_date" type="text" class="form-control"placeholder="Employee joining date">
                </div>

                <div class="col-12 ">
                    <button class="btn btn-danger btn-outline"> Add Employee</button>
                </div>


            </form>
        </section>




    </div>
@endsection
