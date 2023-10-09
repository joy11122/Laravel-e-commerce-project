@extends('backend.layout')
@section('content')
<div class="container-fluid bg-dark text-light py-3">
    <header class="">
        <h3 class="text-center">EXPENCESS DETAILS</h3>
    </header>
    <a href="{{ url('today') }}" class="btn btn-sm btn-danger mt-1 float-end" >ToDay Expencess</a>
    <section class="container bg-dark text-light p-2 my-3 w-50 mt-5 ">
        <form action="{{ url('/expencessupdate'.$data->id) }}" class="row g-3 mb-3 mt-5" method="post">
            @csrf
            @method('put')
            <div class="col-12 ">
                <label for="" class="form-label">EXPENSESS DETAILS</label>
                <input name="details" type="text" class="form-control" value="{{ $data->details }}">
            </div>

            <div class="col-12 ">
                <label for="" class="form-label">AMOUNT</label>
                <input name="amount" type="number" class="form-control"value="{{ $data->amount }}">
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
                <button class="btn btn-sm btn-danger">Update Expencess<button />
            </div>

        </form>
    </section>




</div>
@endsection
