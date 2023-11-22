<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitContoller extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        $services = [];
        foreach ((request()->service) as $service) {
            array_push($services,$service);
        }
        $features=[];
        $imps = ['Road', 'School', 'Hospital'];
        foreach($imps as $imp){
            array_push($features,[$imp=>request()->$imp]);
        }
        // $serv = json_encode($services);
        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $filename = time() . (request()->location) . (request()->type) . (Auth()->user()->id);
            $path = $filename . '.' . $extension;
            request()->file('cover')->storeAs('public/cover', $path);
        }
        unit::create([
            'location'=>request()->county.','.request()->town.','.request()->location,
            'type'=>request()->type,
            'path'=>$path,
            'size'=>request()->size,
            'features'=>json_encode($features),
            'services'=>json_encode($services),
            'price'=>request()->price
        ]);
        return redirect()->back();
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=[
            'assets'=>Unit::where('location','LIKE','%'.request()->s.'%')->orWhere('price','LIKE','%'.request()->s.'%')->get()
        ];
        return view('asset.assets',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
