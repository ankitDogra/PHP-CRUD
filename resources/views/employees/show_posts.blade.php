@extends('layout.layout')

@section('title', 'POSTS')

@section('content')
<div class="container">
    <h2 class="text-center">Post Display</h2>
    @if ($posts->count() > 0)
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>POSTS</th>
                    <th colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $data)
                    <tr>
                        <td>{{ $data->post }}</td>
                        <td class="text-center"><a class="btn btn-primary" href="{{route('employees.index')}}">Back</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No data to display.</p>
    @endif
</div>
@endsection