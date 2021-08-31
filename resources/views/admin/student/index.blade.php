@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Students</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">All Student</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="d-flex justify-content-end w-100">
      <a href="{{url('/dashboard/student/create')}}" class="btn btn-primary text-white mb-4">Add Student</a>
    </div>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Full Name</th>
          <th scope="col">Group Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($students->count() > 0)
        @foreach($students as $student)
        <tr>
          <th scope="row">{{$student->id}}</th>
          <td>{{$student->full_name}}</td>
          <td>{{$student->group->group_name ?? "No Student"}}</td>
          <td>
            <a href="{{url('/dashboard/student/edit/'.$student->id)}}">Edit</a>
            <a href="{{url('/dashboard/student/delete/'.$student->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="4">
            <div class="d-flex justify-content-center mt-4">
              <div class="">
                <p>No Student</p>
              </div>
            </div>
          </th>
        </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>
@endsection