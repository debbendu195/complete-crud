@extends('website.master')

@section('Title','Manage Student')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">

                    <div class="card-body table-responsive">
                        <h6 class="">Student List</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Batch</th>
                                <th>Image</th>
                                <th>Action</th>
                            </thead>

                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->student_id}}</td>
                                        <td>{{$student->batch}}</td>
                                        <td>
                                            <img src="{{asset($student->image)}}" alt="" height="50px" width="50px">
                                        </td>

                                        <td class="d-flex">
                                            <a href="{{route('student.show',$student->id)}}" class="btn btn-success m-1">Show</a>
                                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary m-1">Edit</a>

                                            <form action="{{ route('student.destroy',$student->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm float-start m-1"
                                                        onclick="return confirm('Are you want to delete this !!!')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
