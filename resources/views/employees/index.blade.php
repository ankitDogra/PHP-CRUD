@extends('layout.layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <h2 class="text-center">Data Display</h2>
    <a href="{{ route('employees.add') }}" class="btn btn-success add-entry">+</a>

    @if (!$emp->isEmpty())
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Registration Number</th>
                    <th>Role</th>
                    <th colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emp as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->registration_no }}</td>
                        <td>{{ $data->role }}</td>
                        <td class="text-center"><a class="btn btn-primary" href="{{route('employees.edit', ['emp' => $data])}}">Edit</a></td>
                        <td class="text-center">
                            <form method="post" action="{{ route('employees.destroy', ['emp' => $data]) }}" onsubmit="return confirm('Are you sure you want to delete this employee?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data to display.</p>
    @endif
</div>
@endsection
