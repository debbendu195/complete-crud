@extends('website.master')

@section('Title','Show Student Details')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Student Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Student Name:</b> {{$student->name}}</p>
                                <p><b>Student ID:</b> {{$student->student_id}}</p>
                                <p><b>Batch:</b> {{$student->batch}}</p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset($student->image)}}" height="200px" width="200px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
