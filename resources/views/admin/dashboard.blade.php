@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Dashboard</h1>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-4 col-6 my-2">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$group}}</h3>

        <p>{{$group > 1 ? 'Groups' : 'Group'}}</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-th"></i>
      </div>
      <a href="{{url('/dashboard/group')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6 my-2">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$student}}</h3>

        <p>{{$student > 1 ? 'Students' : 'Student'}}</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
      <a href="{{url('/dashboard/student')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6 my-2">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$classroom}}</h3>

        <p>{{$classroom > 1 ? 'Class Rooms' : 'Class Room'}}</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-th"></i>
      </div>
      <a href="{{url('/dashboard/classroom')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6 my-2">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{$lesson}}</h3>

        <p>{{$lesson > 1 ? 'Lessons' : 'Lesson'}}</p>
      </div>
      <div class="icon">
        <i class="nav-icon fas fa-copy"></i>
      </div>
      <a href="{{url('/dashboard/lesson')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6 my-2">
    <!-- small box -->
    <div class="small-box bg-primary">
      <div class="inner">
        <h3>{{$teacher}}</h3>

        <p>{{$teacher > 1 ? 'Teachers' : 'Teacher'}}</p>
      </div>
      <div class="icon">
        <i class="ion ion-person"></i>
      </div>
      <a href="{{url('/dashboard/teacher')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
@endsection