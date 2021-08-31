@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Lessons</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">All Lesson</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="d-flex justify-content-end w-100">
      <a href="{{url('/dashboard/lesson/create')}}" class="btn btn-primary text-white mb-4">Add Lessons</a>
    </div>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Lessons Type</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($lessons->count() > 0)
        @foreach($lessons as $lesson)
        <tr>
          <th scope="row">{{$lesson->id}}</th>
          <td>{{$lesson->lesson_type}}</td>
          <td>
            <a href="{{url('/dashboard/lesson/edit/'.$lesson->id)}}">Edit</a>
            <a href="{{url('/dashboard/lesson/delete/'.$lesson->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="3">
            <div class="d-flex justify-content-center mt-4">
              <div class="">
                <p>No Lesson</p>
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