@extends('layout.layout')

@section('title', 'Add')

@section('content')
  <h1>Add</h1>
  <form method="post" action="{{ route('employees.store') }}">
    @csrf
    @method('post')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="reg-no">Registration Number</label>
      <input type="text" class="form-control" id="reg-no" name="reg-no" placeholder="Registration Number">
    </div>
    <div class="form-group">
      <label for="role">Role</label>
      <select class="form-control" id="role" name="role">
        <option disabled selected value="">None</option>
        <option>Executive</option>
        <option>Admin</option>
        <option>Senior Software Developer</option>
        <option>Junior Software Developer</option>
      </select>
    </div>
    <div class="text-center"> <!-- Center the "Add" button -->
      <button type="submit" class="btn btn-success">Add</button>
    </div>
  </form>
@endsection
