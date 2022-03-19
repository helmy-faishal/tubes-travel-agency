@extends('layouts.master')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="p-5" style="background-image: url({{asset('images/indonesia.jpg')}});background-repeat:no-repeat;background-size: cover;">
        <div class="container-fluid py-5 text-dark" style="height: 50vh">
        <h1 class="display-5 fw-bold">Travel Agency</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quasi eius voluptates suscipit ullam corporis ea quaerat laborum? Unde provident cumque explicabo qui aut, sequi veritatis tempore officiis nihil aliquid.</p>
        <a href="/blog" class="btn btn-primary btn-lg" role="button">Explore Destination</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-3 bg-light justify-content-center">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div>
                        <h2>Discover Your Destination</h2>
                    </div>      
                </div>
                <div class="d-flex justify-content-center">
                    <div>
                        <p style="font-size: 20px">Here are some destinations that might interest you</p>
                    </div>
                
                </div>
                
            </div>
        </div>
        
    </div>
    <div class="container">
        <div class="row justify-content-center p-3 mb-3">
            <div class="col-4 my-2">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/booking/detail/{{'basic'}}">Package Basic</a></h5>
                      <p class="card-text">Harus login untuk booking</p>
                      <a href="/booking/{{'basic'}}" class="btn btn-primary">Booking Now</a>
                    </div>
                  </div>
            </div>

            <div class="col-4 my-2">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/booking/detail/{{'premium'}}">Package Premium</a></h5>
                      <p class="card-text">Harus login untuk booking</p>
                      <a href="/booking/{{'premium'}}" class="btn btn-primary">Booking Now</a>
                    </div>
                  </div>
            </div>
            <div class="col-4 my-2">
                <div class="card" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/booking/detail/{{'special'}}">Package Special</a></h5>
                      <p class="card-text">Harus login untuk booking</p>
                      <a href="/booking/{{'special'}}" class="btn btn-primary">Booking Now</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="d-flex justify-content-center p-3 mt-2">
            <div>
                <a href="/blog" class="btn btn-primary btn-block">Explore More</a>
            </div>
        </div>

    </div>

    {{-- @include('layouts.part.about') --}}
@endsection