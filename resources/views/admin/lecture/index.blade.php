@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Lectures</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">All Lecture</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="d-flex justify-content-end w-100">
      <a href="{{url('/dashboard/lecture/create')}}" class="btn btn-primary text-white mb-4">Add Lecture</a>
    </div>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Class Room Name</th>
          <th scope="col">Teacher Name</th>
          <th scope="col">Group Name</th>
          <th scope="col">Lesson Name</th>
          <th scope="col">Weekday</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @if($lectures->count() > 0)
        @foreach($lectures as $lecture)
        <tr>
          <th scope="row">{{$lecture->id}}</th>
          <td>{{$lecture->classroom->room_name ?? "No Group"}}</td>
          <td>{{$lecture->teacher->full_name ?? "No Lesson"}}</td>
          <td>{{$lecture->group->group_name ?? "No Group"}}</td>
          <td>{{$lecture->lesson->lesson_type ?? "No Lesson"}}</td>
          <td>{{$weekday}}</td>
          <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </td>
        </tr>
        @endforeach
        @else
        <tr>
          <th colspan="6">
            <div class="d-flex justify-content-center mt-4">
              <div class="">
                <p>No Lecture</p>
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