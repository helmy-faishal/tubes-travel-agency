@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('content')
<div class="container bg-light p-3 my-3">
    <form action="/profile" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group my-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $data->name) }}">
        </div>
        @error('name')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror

        <div class="form-group my-2">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ old('birthdate', $data->birthdate) }}">
        </div>
        @error('birthdate')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror

        {{-- <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $data->email) }}">
        </div>
        @error('email')
            <div class="alert alert-danger mt-1">{{ $message }}</div>
        @enderror --}}

        <button type="submit" class="btn btn-danger my-3">Change</button>

    </form>
</div>
@endsection