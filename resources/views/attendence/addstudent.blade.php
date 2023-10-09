@extends('backend.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto bg-dark text-light p-5">
            <h3 class="text-center bg-info mb-4">Add New Student</h3>
            <form action="stores" method="post">
                @csrf
                @method('post')
                <label class="mb-2">Add Student</label><br>
            <input type="text" name="name" id=""><br>
            <button class="btn btn-primary text-light btn-sm mt-5 ">Add Student</button><br>

            </form>
        </div>
    </div>
</div>
@endsection
