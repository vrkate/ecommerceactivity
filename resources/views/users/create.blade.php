@extends('layouts.master')

@section('page-title', 'Create new User')


@section('content')

<form action="{{ route('users.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label for="">First Name</label>
        <input type="text" class="form-control" name="fname">
    </div>
    <div class="form-group">
        <label for="">Last Name</label>
        <input type="text" class="form-control"  name="lname">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Save</button>
</form>
    
@endsection
