use App\Models\Expencess;
@extends('backend.layout')
@section('content')
    @php
        use App\Models\Expencess;
        $year = date('Y');
        $year = Expencess::where('year', $year)->sum('amount');
        $month = date('F');
        $month = Expencess::where('month', $month)->sum('amount');

    @endphp
    <div class="container">
        <div class="row">

            {{-- <h3 class="mb-1 m-2 text-dark  fw-bold  text-center">EXPENCESS</h3> --}}
            <div class="col-md-10 bg-dark text-light mx-auto p-5">

                <div class="   bg-success text-light">
                    <h3 class="text-center  text-light ">To-Day Cost:{{ $data }} taka</h3>
                </div>
                <div class="   bg-primary text-light">
                    <h3 class="text-center  text-light ">This-month Cost:{{ $month }} taka</h3>
                </div>
                <div class=" bg-danger text-light">
                    <h3 class="text-center  text-info ">This-Year Cost:{{ $year }} taka</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-10 mx-auto">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="col-md-10  mb-2">
                    <a class="btn btn-sm btn-success " href="{{ url('createexpences') }}">Add Expencess</a>
                </div>
                <table class="table table-hover table-responsive text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DETAILS</th>
                            <th>AMOUNT</th>
                            <th>DATE</th>
                            <th>MONTH</th>
                            <th>YEAR</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $item)
                            <tr>
                                <td scope="row">{{ $item->id }}</td>
                                <td>{{ $item->details }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->month }}</td>
                                <td>{{ $item->year }}</td>
                                <td class="d-flex ">
                                    <div class="mx-2">
                                        <a class="btn btn-sm btn-success"
                                            href="{{ url('expencessedit' . $item->id) }}">Edit</a>

                                    </div>
                                    <div>
                                        <form action="{{ url('expencessdelete' . $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>

                                <tr />
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
