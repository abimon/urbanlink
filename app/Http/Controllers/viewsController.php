<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Unit;
use App\Models\User;

class viewsController extends Controller
{
    function index()
    {
        $assets = unit::all();
        return view('client.index', compact( 'assets'));
    }
    function dashboard()
    {
        $units = Unit::all();
        return view('dashboard.index', compact('units'));
    }
    function properties()
    {
        $units = Unit::all();
        $featured = Unit::where('featured', 1)->get();
        return view('client.properties', compact('units','featured'));
    }
    function unit($label)
    {
        $data = [
            'asset' => Unit::where('id', $label)->first()
        ];
        return view('asset.details', $data);
    }
    function assets()
    {
        $data = [
            'assets' => unit::all()
        ];
        return view('asset.assets', $data);
    }
    function about()
    {
        $data = [
            'team' => User::where('role', '!=', 'Client')->get(),
            'tests' => Testimonial::all(),

        ];
        return view('client.about', $data);
    }

    function property($id){
        $property = Unit::where('id', explode('_',$id)[1])->first();
        return view('client.property-single', compact('property'));
    }
}
