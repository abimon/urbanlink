<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Testimonial;
use App\Models\Town;
use App\Models\Unit;
use App\Models\User;

class viewsController extends Controller
{
    function index(){
        $data=[
            'assets' => unit::all(),
        ];
        return view('home',$data);
    }
    function dashboard(){
        $data = [
            'users'=>User::all(),
            'units' => Unit::all(),
        ];
        return view('dashboard', $data);
    }
    function unit($label){
        $data=[
            'asset'=>Unit::where('id',$label)->first()
        ];
        return view('asset.details',$data);
    }
    function assets(){
        $data=[
            'assets'=>unit::all()
        ];
        return view('asset.assets',$data);
    }
    function about(){
        $data = [
            'team'=>User::where('role','!=','Client')->get(),
            'tests'=>Testimonial::all(),
            
        ];
        return view('about',$data);
    }
}
