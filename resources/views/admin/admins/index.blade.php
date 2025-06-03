@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <a href="{{ route('admin.admins.create') }}" class="btn btn-success mb-3">  Add Admin</a>
    <h2>Admin </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th> Email</th>
                <th>Date </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->created_at ? $admin->created_at->format('Y-m-d') : '' }}</td>
                    <td>
                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="post">
                             @method('DELETE')
                            @csrf
                                <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
