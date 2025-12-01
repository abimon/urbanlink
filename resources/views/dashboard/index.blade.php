@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <div class="row" id="units">
        <div class="col-sm-12">
            <div class="white-box" style="min-height: 650px;">
                <div class="d-flex justify-content-between">
                    <h3 class="box-title">Property</h3>
                    <div class="">
                        <a href="{{ route('units.create') }}"><button class="btn btn-primary">+ Add Property</button></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Location</th>
                                <th class="border-top-0">Size</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($units as $key=>$unit)
                            <tr>
                                <td>ULP-{{$key+1}}</td>
                                <td>{{$unit->type}}</td>
                                @php
                                $loc=json_decode($unit->location);
                                @endphp
                                <td>{{ $loc->county.' county, '.$loc->sub_county.' sub-county, '.$loc->location}}</td>
                                <td>{{$unit->size}}</td>
                                <td>{{number_format($unit->price)}}</td>
                                <td>
                                    <div class="btn btn-{{$unit->status=='On Sale'?'success':'danger'}}">{{$unit->status}}</div>
                                </td>
                                @if($unit->status=='On Sale')
                                <td><a class="btn btn-danger" href="/asset/toogleStatus/{{$unit['id']}}">Sell</a></td>@endif

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection