@extends('layouts.master')

@section('title')
    List Paket
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center p-3 mb-3">
        @php
            $package = [
                'basic' => 200000,
                'premium' => 500000,
                'special' => 750000
            ]
        @endphp
        @foreach ($package as $item => $price)
            <div class="col-4 my-2">
                <div class="card" >
                    <img src="{{asset('images/banjarnegara.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a href="/booking/detail/{{$item}}">Paket {{$item}}</a></h5>
                    <p class="card-text">Harus login untuk booking</p>
                    <p class="card-text"> <b>Harga: Rp {{number_format($price)}}</b></p>
                    <a href="/booking/{{$item}}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="d-flex justify-content-center p-3 mt-2">
        <div>
            <a href="/blog" class="btn btn-primary btn-block">Explore More</a>
        </div>
    </div> --}}

</div>
@endsection