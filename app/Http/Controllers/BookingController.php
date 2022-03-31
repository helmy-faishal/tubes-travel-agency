<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Auth;

class BookingController extends Controller
{

    public function __construct(){
        //Semua perlu login kecuali detail
        $this->middleware('auth')->except(['index']);
    }

    public function index(){
        return view('layouts.booking.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'booking_time' => ['required','date']
        ]);

        $id = Auth::user()->id;
        $booking = Booking::create([
            'user_id' => $id,
            'package' => $request['package'],
            'price' => $request['price'],
            'name' => $request['name'],
            // 'email' => $request['email'],
            'phone' => $request['phone'],
            'booking_time' => $request['booking_time']
        ]);

        return redirect('/profile');
    }

    public function edit($id){
        $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        // $booking = $user->booking;
        $booking = Booking::where('id',$id)->where('user_id',$user_id)->first();
        return view('layouts.booking.edit', compact('booking'));
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);

        $request->validate([
            'name' => ['required','string', 'max:255'],
            'birthdate' => ['required','date'],
        ]);

        if (($request->name != $user->name) || ($request->birthdate != $user->birthdate)) {
            $profile = User::where('id',$id)->update([
                'name' => $request['name'],
                'birthdate' => $request['birthdate']
            ]);

            Session::flash('success','Success change profile');
        }

        return redirect('/profile');
        
    }

    public function show($id){
        $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        // $booking = $user->booking;
        $booking = Booking::where('id',$id)->where('user_id',$user_id)->first();
        return view('layouts.booking.show', compact('booking'));
    }

    public function destroy($id){
        $booking = Booking::destroy($id);
        return redirect()->back();
    }

}
