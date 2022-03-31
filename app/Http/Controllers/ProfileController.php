<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Auth;
use Session;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $id = Auth::user()->id;
        $data['user'] = User::find($id)->first();
        $data['booking'] = Booking::where('user_id',$id)->get();
        return view('layouts.profile.index',compact('data'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $data = User::find($id);
        return view('layouts.profile.edit', compact('data'));
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);

        $request->validate([
            'username' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        if ($request->email != $user->email) {
            $request->validate([
                'email' => ['unique:users']
            ]);
        }

        if (($request->name != $user->name)) {
            $profile = User::where('id',$id)->update([
                'username' => $request['username'],
                'email' => $request['email']
            ]);

            Session::flash('success','Success change profile');
        }

        return redirect('/profile');
        
    }
}
