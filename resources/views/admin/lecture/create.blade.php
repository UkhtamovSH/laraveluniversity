@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Create Lecture</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/lecture')}}">All Lecture</a></li>
      <li class="breadcrumb-item active">Create Lecture</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/lecture/create')}}">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="" class="form-labrl">Select ClassRoom</label>
        <select name="classroom_id" class="form-control" id="">
          @foreach($classrooms as $classroom)
          <option value="{{$classroom->id}}">{{$classroom->room_name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Teacher</label>
        <select name="teacher_id" class="form-control" id="">
          @foreach($teachers as $teacher)
          <option value="{{$teacher->id}}">{{$teacher->full_name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Group</label>
        <select name="group_id" class="form-control" id="">
          @foreach($groups as $group)
          <option value="{{$group->id}}">{{$group->group_name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Lesson</label>
        <select name="lesson_id" class="form-control" id="">
          @foreach($lessons as $lesson)
          <option value="{{$lesson->id}}">{{$lesson->lesson_type}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Weekday</label>
        <select name="" class="form-control" id="">
          @foreach($weekdays as $days => $weekday)
          <option value="{{$days}}">{{$weekday}}</option>
          @endforeach
        </select>
      </div>
      <button class="btn btn-primary mt-4">Create</button>
    </form>
  </div>
</div>
@endsection