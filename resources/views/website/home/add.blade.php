@extends('website.master')

@section('Title','Add Student')
@section('body')
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <p> {{session('message')}} </p>
                            <p> Add Student </p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row from-group my-3">
                                    <label for="" class="form-control-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Student Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="student_id">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Batch</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="batch">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>


                                <div>
                                    <button type="submit" class="col-md-12 btn btn-primary">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
