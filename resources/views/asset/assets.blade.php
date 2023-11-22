@extends('layouts.app')
@section('content')
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><span>Property List</span></h2>
				<div class="row bg-light p-3">
					@foreach($assets as $asset)
					<div class="col-md-3">
						<div class="thumb3">
							<div class="thumbnail clearfix">
								<figure><img src="{{asset('storage/cover/'.$asset['path'])}}" alt="" class="img" style="height: 200px; width:auto;"></figure>
								<div class="caption">
									<div class="txt1">{{$asset->type}}</div>
									<div class="txt2">
									<?php $services = json_decode($asset['services']); $ams=json_decode($asset['features'],true);?>
										<p >Buying this {{$asset->type}} will allow you enjoy 
											@foreach($services as $service)
											{{$service}},
											@endforeach
											and many other services.
										</p>
										<p>The {{$asset->type}} is {{$ams[0]['Road']}}Km from the road, {{$ams[1]['School']}}Km from the nearest school and {{$ams[2]['Hospital'] }}Km from the nearest hospital.
											</p>
									</div>
									<div class="txt3">Kshs. {{number_format($asset->price)}}</div>
									<a href="/rentals/{{$asset->id}}" class="button2">More Details</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>

			</div>
		</div>


	</div>
</div>
@endsection