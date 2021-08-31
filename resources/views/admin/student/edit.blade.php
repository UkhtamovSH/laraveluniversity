@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Edit Student</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/student')}}">All Student</a></li>
      <li class="breadcrumb-item active">Edit Student</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/student/edit/'.$student->id)}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="" class="form-label">Full Name</label>
        <input type="text" id="" class="form-control" value="{{$student->full_name}}" name="full_name">
      </div>
      <div class="form-group">
        <label for="" class="form-labrl">Select Group</label>
        <select name="group_id" class="form-control" id="">
          @foreach($groups as $group)
          <option value="{{ $group->id }}" {{ $group->id == $student->group_id ? 'selected' : '' }}>
            {{ $group->group_name }}
          </option>
          @endforeach
        </select>
      </div>

      <button class="btn btn-primary mt-4">Update</button>
    </form>
  </div>
</div>
@endsection