@extends('layouts.master')

@section('page-title', 'Users Page')

@section('content')

    <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">
    Create New User
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $users)
                <tr>
                    <td>{{ $users->fname }}</td>
                    <td>{{ $users->lname }}</td>
                    <td>
                        <a href="{{ route('users.edit', $users->id) }}">
                            Edit
                        </a>
    
                        <form action="{{ route('users.delete', $users->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 



@endsection