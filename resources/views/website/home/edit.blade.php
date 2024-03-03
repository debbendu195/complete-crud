@extends('website.master')

@section('Title','Edit the student')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">

                    <div class="card-header">
                        <p>{{session('message')}}</p>
                        <p> Edit the student </p>
                    </div>

                    <div class="card-body">
                        <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Student Name</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="{{$student->name}}" name="name">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Student ID</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$student->student_id}}" name="student_id">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Batch</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{$student->batch}}" name="batch">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" value="{{$student->image}}" name="image">
                                    <img src="{{asset($student->image)}}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <button type="submit" class="col-md-12 btn btn-success">Update Info</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection



