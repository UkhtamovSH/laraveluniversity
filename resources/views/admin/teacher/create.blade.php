@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Create Teacher</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/teacher')}}">All Teacher</a></li>
      <li class="breadcrumb-item active">Create Teacher</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/teacher/create')}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="teacherFullName" class="form-label">Full Name</label>
        <input type="text" id="teacherFullName" class="form-control" name="full_name">
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Lesson Type</label>
        <select name="lesson_id" class="form-control" id="">
          @foreach($lessons as $lesson)
          <option value="{{$lesson->id}}">{{$lesson->lesson_type}}</option>
          @endforeach
        </select>
      </div>

      <button class="btn btn-primary mt-4">Create</button>
    </form>
  </div>
</div>
@endsection