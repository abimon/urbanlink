@extends('layouts.app')
@section('content')
<div id="content" class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <h2><span>{{$asset->type}} in {{$asset->location}}</span></h2>
                <div class="row">
                    <div class="col-md-9">
                        <div class="thumb2">
                            <div class="thumbnail clearfix">
                                <figure class=""><img src="{{asset('storage/cover/'.$asset['path'])}}" alt="" style="height: 80%;"></figure>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 row">
                <div class="col-md-6">
                    <h2><span>Services</span></h2>
                    <?php $services = json_decode($asset['services']);
                    $ams = json_decode($asset['features'], true); ?>
                    <ul class="ul1">
                        @foreach($services as $service)
                        <li>{{$service}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2><span>Physical</span></h2>
                    <ul class="ul1">
                        <li>{{$ams[0]['Road']}}Km from the nearest road</li>
                        <li>{{$ams[1]['School']}}Km from the nearest school</li>
                        <li>{{$ams[2]['Hospital']}}Km from the nearest hospital</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    @if(($asset->status=='On Sale'))
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Tour</button>
                    @else
                    <button class="btn-danger">{{$asset->status}}</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book Tour</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/book/tour/{{$asset->type}} in {{$asset->location}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='name'>
                        <label for="">Your Name</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="number" class="form-control" placeholder=" " name='contact'>
                        <label for="">Phone Number</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" placeholder=" " name='email'>
                        <label for="">Email</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="date" class="form-control" placeholder=" " name='tour_date'>
                        <label for="">Prefered date of visit</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Book Tour</button>
                </div>
            </form>
        </div>
    </div>
</div>