@extends('layouts.master')

@section('title')
    @if (isset($booking))
        Edit booking paket {{$booking->package}}
    @else
        Invalid
    @endif
    
@endsection

@section('content')
<div class="container p-3">
    @if (isset($booking))
    <p><h3>Edit booking paket: {{$booking->package}}</h3></p>
    <p>Data Diri:</p>

    <div class="container my-3 p-3 bg-light">
        <form action="/booking" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $booking->name) }}">
            </div>
            @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        
            {{-- <div class="form-group my-2">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $booking->email) }}">
            </div>
            @error('email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror --}}
            
            <div class="form-group my-2">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $booking->phone) }}">
            </div>
            @error('phone')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror

            <div class="form-group my-2">
                <label for="booking_time">Booking Time</label>
                <input type="date" class="form-control" min={{date('Y-m-d')}} name="booking_time" id="booking_time" value="{{ old('booking_time', $booking->booking_time) }}">
            </div>
            @error('booking_time')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-danger my-3">Edit</button>
        </form>
    </div>
    @else
        <p> Booking not found </p>
    @endif
</div>

@endsection