@extends('layouts.master')

@section('page-title', 'Edit Users')


@section('content')

<form action="{{ route('users.update', $users->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label for="">First Name</label>
        <input type="text" class="form-control" value="{{ $users->fname }}" name="fname">
    </div>
    <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" class="form-control" value="{{ $users->lname }}" name="lname">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
