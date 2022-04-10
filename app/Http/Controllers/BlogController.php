<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class BlogController extends Controller
{
    public function alam(){
        $data = Destination::where('kategori','Wisata Alam')->simplePaginate(2);
        $blog = 'Wisata Alam';
        return view('layouts.blog.index',['data'=>$data,'blog'=>$blog]);
    }

    public function kuliner(){
        $data = Destination::where('kategori','Kuliner')->simplePaginate(2);
        $blog = 'Kuliner';
        return view('layouts.blog.index',['data'=>$data,'blog'=>$blog]);
    }

    public function hotel(){
        $data = Destination::where('kategori','Hotel')->simplePaginate(2);
        $blog = 'Hotel';
        return view('layouts.blog.index',['data'=>$data,'blog'=>$blog]);
    }

    public function hiburan(){
        $data = Destination::where('kategori','Hiburan')->simplePaginate(2);
        $blog = 'Hiburan';
        return view('layouts.blog.index',['data'=>$data,'blog'=>$blog]);
    }

    
}
