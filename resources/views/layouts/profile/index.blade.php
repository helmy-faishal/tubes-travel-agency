@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="container p-3 mb-3">
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
    <div class="container p-3">
        <p>History Booking</p>

        <div class="container p-3 my-3">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="width: 10px">#</th>
                    <th scope="col">Package</th>
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
                            <td>{{$value->name}}</td>
                            {{-- <td>{{$value->email}}</td> --}}
                            <td>{{$value->phone}}</td>
                            <td>{{$value->booking_time}}</td>
                            <td style="display:flex;">
                                <a href="/booking/show/{{$value->id}}" class="btn btn-info btn-sm mx-2">Show</a>
                                <a href="/booking/{{$value->id}}/edit" class="btn btn-secondary btn-sm mx-2">Edit</a>
                                <form action="/cast/{{$value->id}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm mx-2">
                                </form>
                            </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan="6" align="center">No Data</td>
                      </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection