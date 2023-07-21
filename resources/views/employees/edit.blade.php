@extends('layout.layout')

@section('title', 'Edit')

@section('content')
  <h1>Edit</h1>
  <form method="post" action="{{ route('employees.updated', ['emp'=>$emp]) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{$emp->name}}" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="reg-no">Registration Number</label>
        <input type="text" class="form-control" id="reg-no" name="reg-no" value="{{$emp->registration_no}}" placeholder="Registration Number">
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role">
          <option value="">None</option>
          <option {{ $emp->role === 'Executive' ? 'selected' : '' }}>Executive</option>
          <option {{ $emp->role === 'Admin' ? 'selected' : '' }}>Admin</option>
          <option {{ $emp->role === 'Senior Software Developer' ? 'selected' : '' }}>Senior Software Developer</option>
          <option {{ $emp->role === 'Junior Software Developer' ? 'selected' : '' }}>Junior Software Developer</option>
        </select>
    </div>

    <div class="text-center"> <!-- Center the "Add" button -->
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
@endsection
