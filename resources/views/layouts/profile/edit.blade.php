@extends('layouts.base')

@push('styles')
    <link href="{{asset('MilleniumTravelAgency/Home/home.css')}}" rel="stylesheet">
@endpush

@section('title')
    Edit Profil
@endsection

@section('content')
    <div class="container bg-light p-3 mb-3" style="margin-top: 100px">
        <form action="/profile" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username', $data->username) }}">
            </div>
            @error('username')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $data->email) }}">
            </div>
            @error('email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-danger my-3">Change</button>

        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency/Home/home.js')}}"></script>
@endpush