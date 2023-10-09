@extends('backend.dashboard')
@section('content')
    @php
        use App\Models\Addstudent;
        use App\Models\Attendece;
        $date = date('1-m-Y');
        
        $totaldays = date('t', strtotime($date));
        $studentid = Addstudent::pluck('id')->toArray();
        //  dd($studentid);
        $numberofstudent = Addstudent::count();
        
        $counter = 0;
        
    @endphp

    @if (session('success'))
        <div class="alert alert-danger">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto bg-success p-5 text-light">

                <H3 class="text-center bg-danger text-light">SMART ATTENDENCE MANEGEMENT SYESTEM</H3>
                <span class="text-center mx-auto bg-info p-2">MONTH:{{ date('F') }}</span>
                <br>
                <hr>
                <table border="3" cellspacing="0"width="100%">
                    @for ($i = 1; $i <= $numberofstudent + 2; $i++)
                        @if ($i == 1)
                            <tr>
                                <th rowspan="2">Names</th>
                                @for ($j = 1; $j <= $totaldays; $j++)
                                    <th>{{ $j }}</th>
                                @endfor

                            </tr>
                        @elseif ($i == 2)
                            <tr>
                                @for ($j = 0; $j < $totaldays; $j++)
                                    <th>{{ date('D', strtotime("+$j days", strtotime($date))) }}</th>
                                @endfor

                            </tr>
                        @else
                            <tr>
                                <th> {{ $student[$counter++] }}</th>

                                @for ($j = 1; $j <= $totaldays; $j++)
                                    @php
                                        $datestring = date("Y-m-$j");
                                        // $datearray=$datestring->toArray();
                                        // dd($datearray);
                                        //  $status = Addstudent::whereIn('student_id',$studentid)->whereIn('date',$datearray)->pluck('attendence');
                                        
                                        $status = Attendece::whereIn('student_id', $studentid)->pluck('attendence');
                                        
                                        // dd($status);
                                        $numberofrows = $status->count();
                                        // dd($numberofrows);
                                    @endphp
                                    @foreach ($status as $status)
                                    @endforeach
                                    @if ($numberofrows > 0)
                                        <td>{{ $status }}</td>
                                    @else
                                        <td>e</td>
                                    @endif
                                @endfor
                            </tr>
                        @endif
                    @endfor

                </table>
                <hr>
                <form action="stores" method="post">
                    @csrf
                    @method('post')
                    <label for="">Add Student</label>
                    <input type="text" name="name" id="">
                    <button class="btn btn-sm btn-outline-danger text-light">Add</button>

                </form>
            </div>
        </div>
    </div>
@endsection
@extends('backend.dashboard')
@section('content')
    @php
        $date = now();
        $totaldays = $date->daysInMonth;
        $students = \App\Models\Addstudent::all();
    @endphp

    @if (session('success'))
        <div class="alert alert-danger">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto bg-success p-5 text-light">
                <h3 class="text-center bg-danger text-light">SMART ATTENDANCE MANAGEMENT SYSTEM</h3>
                <span class="text-center mx-auto bg-info p-2">MONTH: {{ $date->format('F') }}</span>
                <br>
                <hr>
                <table border="3" cellspacing="0" width="100%">
                    <tr>
                        <th rowspan="2">Names</th>
                        @foreach (range(1, $totaldays) as $day)
                            <th>{{ $day }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach (range(0, $totaldays - 1) as $day)
                            <th>{{ $date->copy()->addDays($day)->format('D') }}</th>
                        @endforeach
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <th>{{ $student->name }}</th>
                            @foreach (range(1, $totaldays) as $day)
                                @php
                                    $datestring = $date
                                        ->copy()
                                        ->setDay($day)
                                        ->format('Y-m-d');
                                    $status = \App\Models\Attendece::where('student_id', $student->id)
                                        ->whereDate('date', $datestring)
                                        ->pluck('attendence')
                                        ->first();
                                @endphp
                                <td>{{ $status ?? 'e' }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
                <hr>
                <form action="stores" method="post">
                    @csrf
                    @method('post')
                    <label for="">Add Student</label>
                    <input type="text" name="name" id="">
                    <button class="btn btn-sm btn-outline-danger text-light">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
