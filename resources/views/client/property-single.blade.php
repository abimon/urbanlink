@extends('layouts.app',['title' => 'Property Single'])

@section('content')
@php
$loc = json_decode($property->location);
$services = json_decode($property['services']);
$ams = json_decode($property['features'], true);
@endphp
<div
  class="hero page-inner overlay bg-white"
  style="background-image: url('/storage/client/images/hero_bg_3.jpg')">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">
          {{$property->category.' in '.$loc->county.' County, '. $loc->sub_county}}
        </h1>

        <nav
          aria-label="breadcrumb"
          data-aos="fade-up"
          data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a href="/properties">Properties</a>
            </li>
            <li
              class="breadcrumb-item active text-white-50"
              aria-current="page">
              {{$property->category.' in '.$loc->county}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="section bg-white">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7">
        <div class="img-property-slide-wrap">
          <div class="img-property-slide">
            <img src="/{{ $property->path }}" alt="Image" class="img-fluid" />
            <!-- <img src="/storage/client/images/img_2.jpg" alt="Image" class="img-fluid" />
            <img src="/storage/client/images/img_3.jpg" alt="Image" class="img-fluid" /> -->
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <h2 class="heading text-primary">{{$loc->county.', '. $loc->sub_county}}</h2>
        <p class="meta"><i class="fa fa-location-dot"></i> {{$loc->ward.', '.$loc->location}}</p>
        <div class="">
          <p class="text-black-50">
            {{$property->description}}
          </p>
          <div class="">
            <h2><span>Services</span></h2>
            <ul class="ul1">
              @foreach($services as $service)
              <li>{{$service}}</li>
              @endforeach
            </ul>
          </div>
          <div class="">
            <h2><span>Physical</span></h2>
            <ul class="ul1">
              <li>{{$ams[0]['Road']}} from the nearest road</li>
              <li>{{$ams[1]['School']}} from the nearest school</li>
              <li>{{$ams[2]['Hospital']}} from the nearest hospital</li>
            </ul>
          </div>
        </div>
        <div class="text">
          @if(($property->status=='On Sale'))
          <button type="button" class="btn btn-success  py-2 px-3 w-100" data-bs-toggle="modal" data-bs-target="#booktour">Book Tour</button>
          @else
          <button class="btn btn-danger  py-2 px-3 w-100">{{$property->status}}</button>
          @endif
        </div>
        <div class="d-block agent-box p-5">
          <div class="img mb-4">
            <img
              src="/{{ $property->cover }}"
              alt="Image"
              class="img-fluid" />
          </div>
          <div class="text">
            <h3 class="mb-0">{{$property->user->name}}</h3>
            <div class="meta mb-3">{{$property->user->role}}</div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ratione laborum quo quos omnis sed magnam id ducimus saepe
            </p>
            <ul class="list-unstyled social dark-hover d-flex">
              <li class="me-1">
                <a href="https://wa.me/{{$property->user->phone}}" target="_blank"><span class="icon-whatsapp"></span></a>
              </li>
              <li class="me-1">
                <a href="tel:{{$property->user->phone}}"><span class="icon-phone" target="_blank"></span></a>
              </li>
              <li class="me-1">
                <a href="sms:{{$property->user->phone}}"><span class="icon-message" target="_blank"></span></a>
              </li>
              <li class="me-1">
                <a href="mailto:{{$property->user->email}}"><span class="icon-envelope" target="_blank"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="booktour" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Tour</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('book_tour.store',['pID'=>$property->id]) }}" method="post" enctype="multipart/form-data">
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
            <input type="date" class="form-control" placeholder=" " name='tour_date' value="{{ date('Y-m-d') }}">
            <label for="">Prefered date of visit</label>
          </div>
          <div class="form-floating mb-1">
            <input type="time" class="form-control" placeholder=" " name='tour_time' value="{{ date('H:i:s') }}">
            <label for="">Prefered time of visit</label>
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
@endsection