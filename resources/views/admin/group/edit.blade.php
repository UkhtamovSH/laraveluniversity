@extends('admin.admin-master')

@section('content-header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Edit Group</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{url('/dashboard/group')}}">All Group</a></li>
      <li class="breadcrumb-item active">Edit Group</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <form method="POST" action="{{url('/dashboard/group/edit/'.$group->id)}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="" class="form-label">Group Name</label>
        <input type="text" id="" class="form-control" value="{{$group->group_name}}" name="group_name">
      </div>

      <button class="btn btn-primary mt-4">Update</button>
    </form>
  </div>
</div>
@endsection