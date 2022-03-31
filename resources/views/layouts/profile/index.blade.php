@extends('layouts.base')

@push('styles')
    <link href="{{asset('MilleniumTravelAgency/Home/home.css')}}" rel="stylesheet">
@endpush

@section('title')
    Profile
@endsection

@section('content')
    <div class="container p-3 mb-3" style="margin-top: 100px">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif

        <p>Nama: {{$data['user']->username}}</p>
        <p>Email: {{$data['user']->email}}</p>

        <div class="d-flex justify-content-between">
            <a href="/profile/edit" class="btn btn-secondary" role="button">Setting</a>
            <a href="/logout" class="btn btn-danger" role="button">Logout</a>
        </div>
    </div>
    <div class="container p-3">
        <p>History Booking</p>

        <div class="container p-3 my-3">
            <table class="table">
                <thead class="thead-light bg-light">
                  <tr>
                    <th scope="col" style="width: 10px">#</th>
                    <th scope="col">Package</th>
                    <th scope="col">Price</th>
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Email</th> --}}
                    <th scope="col">Phone</th>
                    <th scope="col">Booking Time</th>
                    <th scope="col" style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data['booking'] as $key => $value)
                      <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$value->package}}</td>
                            <td>Rp{{number_format($value->price)}}</td>
                            <td>{{$value->name}}</td>
                            {{-- <td>{{$value->email}}</td> --}}
                            <td>{{$value->phone}}</td>
                            <td>{{$value->booking_time}}</td>
                            <td style="display:flex;">
                                <a href="/booking/show/{{$value->id}}" class="btn btn-info btn-sm mx-2">Show</a>
                                <a href="/booking/{{$value->id}}/edit" class="btn btn-secondary btn-sm mx-2">Edit</a>
                                <form action="/booking/{{$value->id}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm mx-2">
                                </form>
                            </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="7" align="center">No Data</td>
                      </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('MilleniumTravelAgency/Home/home.js')}}"></script>
@endpush