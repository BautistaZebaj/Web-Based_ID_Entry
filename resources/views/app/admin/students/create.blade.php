@extends('adminlte::page')

@section('title', 'Students | Create')

@section('content_header')
    <h1>Students: Create Student</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('app.admin.students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="level">Level:</label>
                <select name="level" id="level" class="form-control" required>
                    <option value="">Select Level</option>
                    @for($i = 12; $i >= 7; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <select name="class" id="class" class="form-control" required>
                    <option value="">Select Class</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" id="mname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@stop

@section('footer')
    Copyright &copy; 2024. <strong>cbrj Admin</strong>. All rights reserved.
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#level').change(function(){
            var level = $(this).val();
            var options = '';
            if(level == '12') {
                var classes = ['ICT', 'HUMMS1', 'HUMMS2', 'HUMMS3', 'HUMMS4', 'STEM', 'HE1', 'HE2', 'ABM'];
                classes.forEach(function(cls) {
                    options += '<option value="' + cls + '">' + cls + '</option>';
                });
            }
            // Add other level cases as needed
            $('#class').html(options);
        });
    });
</script>
@stop
