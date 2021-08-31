@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Teachers</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">All Teacher</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="d-flex justify-content-end w-100">
      <a href="{{url('/dashboard/teacher/create')}}" class="btn btn-primary text-white mb-4">Add Teacher</a>
    </div>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Full Name</th>
          <th scope="col">Lesson Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($teachers->count() > 0)
        @foreach($teachers as $teacher)
        <tr>
          <th scope="row">{{$teacher->id}}</th>
          <td>{{$teacher->full_name}}</td>
          <td>{{$teacher->lesson->lesson_type ?? "No Teacher"}}</td>
          <td>
            <a href="{{url('/dashboard/teacher/edit/'.$teacher->id)}}">Edit</a>
            <a href="{{url('/dashboard/teacher/delete/'.$teacher->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="4">
            <div class="d-flex justify-content-center mt-4">
              <div class="">
                <p>No Teacher</p>
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