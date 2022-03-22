@extends('layouts.master')

@section('title')
    List Paket
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center p-3 mb-3">
        @foreach (array('basic','premium','special') as $item)
            <div class="col-4 my-2">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a href="/booking/detail/{{$item}}">Paket {{$item}}</a></h5>
                    <p class="card-text">Harus login untuk booking</p>
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