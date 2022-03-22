@extends('layouts.master')

@section('title')
    Booking paket {{$package}}
@endsection

@section('content')
<div class="container p-3">
    <p><h3>Booking paket: {{$package}}</h3></p>
    <p>Data Diri:</p>

    <div class="container my-3 p-3 bg-light">
        <form action="/booking" method="POST">
            @csrf
            @method('POST')

            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $data->name) }}">
            </div>
            @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        
            {{-- <div class="form-group my-2">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $data->email) }}">
            </div>
            @error('email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group my-2">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', "") }}">
            </div>
            @error('phone')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror

            <div class="form-group my-2">
                <label for="booking_time">Booking Time</label>
                <input type="date" class="form-control" min={{date('Y-m-d')}} name="booking_time" id="booking_time" value="{{ old('booking_time', date('Y-m-d')) }}">
            </div>
            @error('booking_time')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
            <input type="hidden" name="package" value={{$package}}>

            <button type="submit" class="btn btn-success my-3">Booking Now</button>
        </form>
    </div>
</div>

@endsection