@extends('layouts.base')

@section('title')
    MILLENNIUM TRAVEL AGEN
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{asset('MilleniumTravelAgency\SignUp\daftar.css')}}" rel="stylesheet">
@endpush

@section('content')    
    <div class="konten" style="margin-top: 100px">
        <form action="/register" method="POST">
            @csrf
            @method('POST')
            <h3>Daftar Akun</h3>
            <p> Username </p>
            <input type="text" placeholder="Masukan username" name="username" required>
            <br>
            <p>Email</p>
            <input type="email" placeholder="Masukan email anda!" name="email" required>
            <br>
            <p>Password</p>
            <input type="password" placeholder="Masukan password anda" name="password" required>
            <br>
            <p>Confirm Password</p>
            <input type="password" placeholder="Masukan kembali password anda" name="password_confirmation" required>
            <br>
            <div style="text-align: right;">
                <input type="submit" style="margin-top: 20px;width: auto;background-color: brown;color: white; border: transparent;">
            </div>
            <div style="margin-top: 50px;text-align: center;">
                <p>Sudah punya akun? <a href="{{route('login')}}">Login</a></p>
            </div>
            <div style="margin-top: 50px;text-align: center;">
                <p style="color: brown;">Millennium Travel Agency</p>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency\SignUp\daftar.js')}}"></script>
@endpush