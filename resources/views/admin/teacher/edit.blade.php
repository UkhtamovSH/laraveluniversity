@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Edit Teacher</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/teacher')}}">All Teacher</a></li>
      <li class="breadcrumb-item active">Edit Teacher</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/teacher/edit/'.$teacher->id)}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="" class="form-label">Full Name</label>
        <input type="text" id="" class="form-control" value="{{$teacher->full_name}}" name="full_name">
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Lesson Type</label>
        <select name="lesson_id" class="form-control" id="">
          @foreach($lessons as $lesson)
          <option value="{{ $lesson->id }}" {{ $lesson->id == $teacher->lesson_id ? 'selected' : '' }}>
            {{ $lesson->lesson_type }}
          </option>
          @endforeach
        </select>
      </div>

      <button class="btn btn-primary mt-4">Update</button>
    </form>
  </div>
</div>
@endsection