@extends('layouts.base')

@push('styles')
    <link href="{{asset('MilleniumTravelAgency/TravelBlog/travelBlog.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush

@section('title')
    Blog
@endsection

@section('content')
<div id="main">
    <div class="menu">
    <nav class="nav-menu">
        <ul class="contain">
            <li>
                <a href="travelBlog.html" class="item this">Wisata Alam</a>
            </li>
            <li>
                <a href="" class="item" >Kuliner</a>
            </li>
            <li>
                <a href="" class="item">Hotel</a>
            </li>
            <li>
                <a href="" class="item">Hiburan</a>
            </li>
        </ul>
    </nav>
    </div>
    <div class="container">
    <div class="box-item">
        <div class="left-item">
            <img src="{{asset('MilleniumTravelAgency/TravelBlog/telaga.jpeg')}}" alt="">
        </div>
        <div class="right-item">
            <h3>Telaga Warna</h3>
            <p>
                Nama Telaga Warna sendiri diberikan karena keunikan fenomena alam yang terjadi di tempat ini, 
                yaitu warna air dari telaga tersebut yang sering berubah-ubah. 

                <p>Lokasi : Dieng <br>
                HTM &ensp;: Rp15000/orang
                </p>
            </p>
        </div>
    </div>
    <div class="box-item">
        <div class="left-item">
            <img src="{{asset('MilleniumTravelAgency/TravelBlog/sikunir.jpg')}}" alt="">
        </div>
        <div class="right-item">
            <h3>Bukit Sikunir</h3>
            <p>
                Di Dieng, terdapat banyak bukit atau gunung yang bisa dijadikan pilihan untuk menikmati panorama sunrise karena kawasan Dieng merupakan dataran tinggi. 
                Salah satu bukit yang populer di Dieng dengan panorama sunrise-nya adalah Bukit Sikunir.

                <p>Lokasi : Dieng <br>
                HTM &ensp;: Rp10000/orang
                </p>
        </div>
    </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency/TravelBlog/travelBlog.js')}}"></script>
@endpush
