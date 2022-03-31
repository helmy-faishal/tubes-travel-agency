@extends('layouts.base')

@section('title')
    MILLENNIUM TRAVEl AGEN
@endsection
@push('styles')
    <link href="{{asset('MilleniumTravelAgency/Login/login.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="konten" style="margin-top: 100px">
        <form action="/login" method="POST">
            @csrf
            @method('POST')
            <h3>Login</h3>
            <p> Email </p>
            <input type="text" placeholder="Masukan email" name="email">
            <br>
            <p>Password</p>
            <input type="password" placeholder="Masukan password anda" name="password">
            <br>
            <div style="text-align: right;">
                <input type="submit" style="margin-top: 20px;width: auto;background-color: brown;color: white; border: transparent;">
            </div>
            <div style="margin-top: 50px;text-align: center;">
                <p>Belum punya akun? <a href="{{route('register')}}">Daftar</a></p>
            </div>
            <div style="margin-top: 115px;text-align: center;">
                <p style="color: brown;">Millennium Travel Agency</p>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency/Login/login.js')}}"></script>
@endpush