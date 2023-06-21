<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\Portofolio;

class HomeController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::first();
        $data['portofolio'] = Portofolio::all();

        // $data['portofolio'] = Portofolio::all();
        return view('home',$data);
    }
    // function portofolio(){
    //     $data['portofolio'] = Portofolio::all();
    //     // $data['portofolio'] = Portofolio::all();
    //     return view('home',$data);
    // }
}
