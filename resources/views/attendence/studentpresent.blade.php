@extends('backend.dashboard')
@section('content')
<div class="container">
    <div class="col-md-10 mx-auto p-5 bg-dark">
        <div class="row">
            <h3 class="text-light bg-dark text-center ">Take Attendence</h3>
            <form action="takeAttendence" method="post">
                @csrf
                @method('post')
            <table border="1" class="table p-5">

                    <thead>
                        <tr class="table-info">
                            <th>Student Name</th>
                            <th>P</th>
                            <th>A</th>
                            <th>L</th>
                            <th>H</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $students)
                            <tr>

                                <th scope="row">{{ $students->name }}</th>
                                <td><input type="checkbox" name="present[]" value="{{ $students->id }}">

                                </td>
                                <td><input type="checkbox" name="absent[]" value="{{ $students->id }}">

                                </td>
                                <td><input type="checkbox" name="late[]" value="{{ $students->id }}">
                                </td>
                                <td><input type="checkbox" name="holiday[]" value="{{ $students->id }}">

                                </td>
                            </tr>
                        @endforeach
                      <tr>
                       <td colspan="1">
                        <label for="">Select Date</label>
                       </td>
                        <td colspan="4">
                            <input type="date" name="datee">
                        </td>
                      </tr>
                      <tr>
                      <td colspan="6">
                        <button type="submit" class="btn btn-outline btn-danger">Submit</button>
                      </td>
                      </tr>
                    </tbody>



            </table>
        </form>
        </div>
    </div>
</div>
@endsection

