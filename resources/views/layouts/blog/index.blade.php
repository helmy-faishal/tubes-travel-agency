@extends('layouts.base')

@push('styles')
    <link href="{{asset('MilleniumTravelAgency/TravelBlog/travelBlog.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush

@section('title')
    Blog - {{$blog}}
@endsection

@section('content')
<div id="main">
    <div class="menu">
    <nav class="nav-menu">
        @php
            $menu = [
                'Wisata Alam' => 'blog.alam',
                'Kuliner' => 'blog.kuliner',
                'Hotel' => 'blog.hotel',
                'Hiburan' => 'blog.hiburan'
                ]
        @endphp
        <ul class="contain">
            @foreach ($menu as $kategori => $route)
                @if ($kategori == $blog)
                    <li>
                        <a href="{{route($route)}}" class="item this">{{$kategori}}</a>
                    </li>
                @else
                    <li>
                        <a href="{{route($route)}}" class="item">{{$kategori}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </nav>
    </div>
    <div class="container">
        @foreach ($data as $destination)
            <div class="box-item">
                <div class="left-item">
                    <img src="{{asset($destination->gambar)}}" alt="{{$destination->nama}}">
                </div>
                <div class="right-item">
                    <h3>{{$destination->nama}}</h3>
                    <p class="text-break">{{$destination->deskripsi}}</p>
                    <p>{{$destination->lokasi}}</p>
                    @isset($destination->harga)
                        <p>Info Harga/Tiket: {{$destination->harga}}</p>
                    @endisset

                    @isset($destination->link_resmi)
                        <p>Link Resmi: <a href="{{$destination->link_resmi}}">{{$destination->nama}}</a></p>
                    @endisset
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-end">
            {!!$data->links()!!}
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency/TravelBlog/travelBlog.js')}}"></script>

    <script>
        $('#blog').addClass('this');
    </script>
@endpush
