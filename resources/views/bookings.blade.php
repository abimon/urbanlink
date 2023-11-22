@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row" id="units">
        <div class="col-sm-12">
            <div class="white-box" style="min-height: 650px;">
                <h2 class="text-center">Bookings</h2>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Property</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Phone Number</th>
                                <th class="border-top-0">Date Booked</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($units as $key=>$unit)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$unit->property}}</td>
                                <td>{{$unit->name}}</td>
                                <td>{{$unit->email}}</td>
                                <td>{{$unit->contact}}</td>
                                <td>{{$unit->tour_date}}</td>
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