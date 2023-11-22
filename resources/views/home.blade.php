@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide mt-0" data-bs-ride="carousel">
    <div class="find_inner">
        <div class="find">
            <div class="txt1">welcome to</div>
            <div class="txt2">URBAN LINK</div>
            <div class="txt3">PROPERTIES</div>
            
            <div class="line"></div>
            <div class="txt4">THE EASIEST WAY TO FIND PROPERTY</div>
            <div class="find-form-wrapper clearfix">
                <form id="find-form" action="/search" method="GET" accept-charset="utf-8" class="navbar-form clearfix">
                    <input type="text" name="s" value='Search by location or value' onBlur="if(this.value=='') this.value='Search by location or value'" onFocus="if(this.value =='Search by location or value' ) this.value=''">
                </form>
            </div>
        </div>
    </div>
    <div class="carousel-indicators">
        @for($i=0;$i<=4;$i++) 
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide 1"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @for($i=1;$i<=5;$i++) <div class="carousel-item {{$i==1?'active':''}}">
            <img src="{{asset('storage/images/land'.$i.'.jpg')}}" class="d-block w-100" alt="...">
    </div>
    @endfor

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<div id="slider3_wrapper">
    <div class="container-fluid">
        <div class="slider3_title"><span>LATEST PROPERTIES</span></div>
        <div id="slider3" style="background-color: white;">
            <a class="prev3" href="#"></a>
            <a class="next3" href="#"></a>
            <div class="carousel-box row">
                <div class="inner span12">
                    <div class="carousel main" style="padding: 50px;">
                        <ul>
                            @foreach($assets as $asset)
                            <li class="m-2">
                                <div class="offer">
                                    <div class="offer_inner">
                                        <a href="#">
                                            <figure><img src="{{asset('storage/cover/'.$asset->path)}}" alt="" class="img" style="height: 200px; width:auto;"></figure>
                                            <div class="caption">
                                                <div class="txt1">{{$asset->type}}</div>
                                                <div class="txt2"><i class="bi bi-geo-alt-fill"></i> {{$asset->location}}</div>
                                                <div class="txt3">Ksh. {{number_format($asset->price)}}.00</div>
                                                <a href="/rentals/{{$asset->id}}">
                                                    <div class="txt4">See Details</div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection