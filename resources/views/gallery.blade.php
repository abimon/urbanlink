@extends('layouts.app')
@section('content')
<div id="content">
	<div class="container">
		<div class="row">
			<div class="span12">

				<h2><span>Our Photos</span></h2>

				<div id="isotope-options">
					<ul id="isotope-filters" class="clearfix">
						<li><a href="#" class="selected" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".isotope-filter1">Category 1</a></li>
						<li><a href="#" data-filter=".isotope-filter2">Category 2</a></li>
						<li><a href="#" data-filter=".isotope-filter3">Category 3</a></li>
					</ul>
				</div>

				<ul class="thumbnails" id="isotope-items">
					<li class="span4 isotope-element isotope-filter1">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/gallery01.jpg')}}">
									<figure>
										<img src="{{asset('storage/images/gallery01.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter2">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery02.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter3">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery03.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter1">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery04.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter2">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery05.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter3">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery06.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter1">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery07.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter2">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery08.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="span4 isotope-element isotope-filter3">
						<div class="thumb-isotope">
							<div class="thumbnail clearfix">
								<a href="{{asset('storage/images/blank.png')}}">
									<figure>
										<img src="{{asset('storage/images/gallery09.jpg')}}" alt=""><em></em>
									</figure>
									<div class="caption">
										Lorem ipsum dolor sit amet conse ctetur
									</div>
								</a>
							</div>
						</div>
					</li>

				</ul>










			</div>
		</div>


	</div>
</div>
@endsection