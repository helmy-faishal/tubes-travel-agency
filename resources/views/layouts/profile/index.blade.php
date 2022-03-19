@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        {{-- {{dd($data['user'])}} --}}
        <p>Nama: {{$data['user']->name}}</p>
        <p>Tanggal Lahir: {{$data['user']->birthdate}}</p>
        <p>Email: {{$data['user']->email}}</p>
    </div>
@endsection