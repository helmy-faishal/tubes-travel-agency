@extends('layouts.master')

@section('title')
    Detail Paket
@endsection

@section('content')
<div class="container p-3 mb-3">
    @if (isset($booking))
        <p><h3>Package Name: {{$booking->package}}</h3></p>
        <p>Name: {{$booking->name}}</p>
        <p>Name: {{$booking->name}}</p>
        <p>Phone: {{$booking->phone}}</p>
        <p>Booking Time: {{$booking->booking_time}}</p>
    @else
        <p>Booking not found</p>
    @endif
    
</div>
@endsection