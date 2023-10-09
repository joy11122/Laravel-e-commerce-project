@extends('backend.layout')
@section('content')
    <div class="container-fluid bg-dark text-light py-3">
        <header class="display-6">
            <h2 class="text-center">EXPENCESS DETAILS</h2>
        </header>
        <a href="{{ url('today') }}" class="btn btn-sm btn-danger float-end" >ToDay Expencess</a>
        <section class="container bg-dark text-light p-2 my-3 w-50">
            <form action="{{ url('/expencessstore') }}" class="row g-3 mt-2" method="post">
                @csrf
                @method('post')
                <div class="col-12 ">
                    <label for="" class="form-label">EXPENSESS DETAILS</label>
                    <input name="details" type="text" class="form-control" placeholder="Employee name">
                </div>

                <div class="col-12 ">
                    <label for="" class="form-label">AMOUNT</label>
                    <input name="amount" type="number" class="form-control"placeholder="expencess detail">
                </div>

                <div class="col-12 ">

                    <input name="date" type="hidden" class="form-control" value="{{ date('d-m-y') }}">
                </div>

                <div class="col-6 ">

                    <input name="month" type="hidden" class="form-control"value="{{ date('F') }}">
                </div>
                <div class="col-6 ">

                    <input name="year" type="hidden" class="form-control"value="{{ date('Y') }}">
                </div>

                <div class="">
                    <button class="btn btn-sm btn-danger">Add Expencess<button />
                </div>

            </form>
        </section>




    </div>
@endsection
