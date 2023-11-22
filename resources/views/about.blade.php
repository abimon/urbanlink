@extends('layouts.app')
@section('content')
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2 id="who"><span>Who We Are</span></h2>
				<h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna.</h3>

				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class=""><img src="{{asset('storage/images/about01.jpg')}}" alt=""></figure>
						<div class="caption">
							<p>
								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis voluptas corrupti impedit, illum enim. Totam eligendi placeat nihil illo doloribus id repellendus inventore suscipit itaque delectus, fugiat corrupti perferendis?
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h2 id="services"><span>Our Services</span></h2>
				<ul class="ul1">
					<li><a href="#">Buying and selling of properties.</a></li>
					<li><a href="#">Sales and Marketing.</a></li>
					<li><a href="#">Property management.</a></li>
					<li><a href="#">Real estate consultancy services.</a></li>
					<li><a href="#">Property surveys services.</a></li>
				</ul>
			</div>
		</div>
		<div id="slider4_wrapper">
			<div class="slider4_title" id="team"><span>Our Team</span></div>
			<div id="slider4">
				<a class="prev4" href="#"></a>
				<a class="next4" href="#"></a>
				<div class="carousel-box row">
					<div class="inner span12">
						<div class="carousel main">
							<ul>
								@foreach($team as $member)
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/profile/'.$member['path'])}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">{{$member->name}}</div>
													<div class="txt2">{{$member->role}}</div>
													<div class="txt3">{{$member->about}}</div>
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
		@if($tests->count()>0)
		<div id="slider5_wrapper">
			<div class="slider5_title" id="testimonials"><span>testimonials</span></div>
			<div id="slider5">
				<div class="carousel-box">
					<div class="inner">
						<div class="carousel main">
							<ul>
								@foreach($tests as $test)
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="{{asset('storage/images/tests/$test->path')}}" alt="" style="width:100%;height: auto;" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">{{$test->title}}</div>
												<div class="txt2">{{$test->description}}</div>
												<div class="txt3">- {{$test->name}}, {{$test->company}}</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="pagination5" id="slider5_pag"></div>
			</div>
		</div>
		@endif
	</div>
</div>
@endsection