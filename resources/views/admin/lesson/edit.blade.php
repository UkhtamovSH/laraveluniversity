@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Edit Lesson</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/lesson')}}">All Lesson</a></li>
      <li class="breadcrumb-item active">Edit Lesson</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/lesson/edit/'.$lesson->id)}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="" class="form-label">Lesson Type</label>
        <input type="text" id="" class="form-control" value="{{$lesson->lesson_type}}" name="lesson_type">
      </div>

      <button class="btn btn-primary mt-4">Update</button>
    </form>
  </div>
</div>
@endsection