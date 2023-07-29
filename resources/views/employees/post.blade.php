@extends('layout.layout')

@section('title', 'POSTS')

@section('content')
<h1>Posts</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group"> 
      <label for="registration_no">Select Registration No:</label>
      <select class="form-control" name="registration_no" id="registration_no">
          @foreach ($employees as $employee)
              <option value="{{ $employee->registration_no }}" data-name="{{ $employee->name }}" data-role="{{ $employee->role }}">
                {{ $employee->registration_no }}
              </option>
          @endforeach
      </select>
    </div>
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name" readonly>
    </div>

    <div class="form-group">
      <label for="role">Role:</label>
      <input type="text" class="form-control" name="role" id="role" readonly>
    </div>

    <div class="form-group">
      <label for="post">Post:</label>
      <textarea class="form-control" name="post" id="post" rows="4" cols="50"></textarea>
    </div>
    
    <div class="text-center">
      <button type="submit" class="btn btn-success">POST</button>
    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const registrationNoSelect = document.getElementById("registration_no");
        const nameField = document.getElementById("name");
        const roleField = document.getElementById("role");

        registrationNoSelect.addEventListener("change", function () {
            const selectedOption = registrationNoSelect.options[registrationNoSelect.selectedIndex];
            nameField.value = selectedOption.dataset.name;
            roleField.value = selectedOption.dataset.role;
        });
    });
</script>

@endsection