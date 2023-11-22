@extends('layouts.app')
@section('content')
<div id="content">
	<div class="container">
		<div class="row">
			<div class="span9">

				<h2 id="who"><span>Who We Are</span></h2>

				<h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna.</h3>

				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class=""><img src="{{asset('storage/images/about01.jpg')}}" alt=""></figure>
						<div class="caption">
							<p>
								Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula
								ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel
								interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor
								id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at
								hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit
								amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
								labore et dolore magna aliqua.

							</p>
							<a href="#" class="button1">Read more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="span3">

				<h2 id="services"><span>Our Services</span></h2>

				<ul class="ul1">
					<li><a href="#">Adipisicing</a></li>
					<li><a href="#">Dolore magna aliqua</a></li>
					<li><a href="#">Eiusmod tempor</a></li>
					<li><a href="#">Elit sed do</a></li>
					<li><a href="#">Incididunt ut labore et</a></li>
					<li><a href="#">Lorem ipsum dolor</a></li>
					<li><a href="#">Sit amet conse ctetur</a></li>
					<li><a href="#">Ut enim ad minim</a></li>
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
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team01.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Jesica McSeller</div>
													<div class="txt2">Director</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team02.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Alex Morgan</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team03.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Pamela Brian</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team04.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Andreas wolf</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team05.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Monica winc</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team06.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Monty Brown</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team01.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Jesica McSeller</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team02.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Alex Morgan</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team03.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Pamela Brian</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team04.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Andreas wolf</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team05.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Monica winc</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<div class="team">
										<div class="team_inner">
											<a href="#">
												<figure><img src="{{asset('storage/images/team06.jpg')}}" alt="" class="img">
												</figure>
												<div class="caption">
													<div class="txt1">Monty Brown</div>
													<div class="txt2">agent</div>
													<div class="txt3">Lorem ipsum dolor sit amet, conse etur
														et adipiscing elit. </div>
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
		</div>

		<div id="slider5_wrapper">

			<div class="slider5_title"><span>testimonials</span></div>

			<div id="slider5">

				<div class="carousel-box">
					<div class="inner">
						<div class="carousel main">
							<ul>
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="images/team01.jpg" alt="" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">Ipsum dolor sit amet conse ctetur
													adipisicing elit</div>
												<div class="txt2">Nulla ultricies enim aliquet augue
													eleifend iaculis. Nam sollicitudin ligula ac nisi
													iaculis eu scelerisque risus ultricies. Nullam eu elit
													risus, vel interdum urna. Aenean leo nulla, aliquet
													vitae ultricies sit amet, porttitor id sapien. In hac
													habitasse platea dictumst. Donec pharetra gravida augue
													at hendrerit. Cras Lorem ipsum dolor sit amet conse
													ctetur adipisicing elit, sed do eiusmod tempor
													incididunt ut labore et dolore magna. Ipsum dolor sit
													amet conse ctetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="txt3">- Jesica Williams, Company Name</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="images/team02.jpg" alt="" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">Ipsum dolor sit amet conse ctetur
													adipisicing elit</div>
												<div class="txt2">Nulla ultricies enim aliquet augue
													eleifend iaculis. Nam sollicitudin ligula ac nisi
													iaculis eu scelerisque risus ultricies. Nullam eu elit
													risus, vel interdum urna. Aenean leo nulla, aliquet
													vitae ultricies sit amet, porttitor id sapien. In hac
													habitasse platea dictumst. Donec pharetra gravida augue
													at hendrerit. Cras Lorem ipsum dolor sit amet conse
													ctetur adipisicing elit, sed do eiusmod tempor
													incididunt ut labore et dolore magna. Ipsum dolor sit
													amet conse ctetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="txt3">- Alex Morgan, Company Name</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="images/team03.jpg" alt="" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">Ipsum dolor sit amet conse ctetur
													adipisicing elit</div>
												<div class="txt2">Nulla ultricies enim aliquet augue
													eleifend iaculis. Nam sollicitudin ligula ac nisi
													iaculis eu scelerisque risus ultricies. Nullam eu elit
													risus, vel interdum urna. Aenean leo nulla, aliquet
													vitae ultricies sit amet, porttitor id sapien. In hac
													habitasse platea dictumst. Donec pharetra gravida augue
													at hendrerit. Cras Lorem ipsum dolor sit amet conse
													ctetur adipisicing elit, sed do eiusmod tempor
													incididunt ut labore et dolore magna. Ipsum dolor sit
													amet conse ctetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="txt3">- Pamela Brian, Company Name</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="images/team04.jpg" alt="" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">Ipsum dolor sit amet conse ctetur
													adipisicing elit</div>
												<div class="txt2">Nulla ultricies enim aliquet augue
													eleifend iaculis. Nam sollicitudin ligula ac nisi
													iaculis eu scelerisque risus ultricies. Nullam eu elit
													risus, vel interdum urna. Aenean leo nulla, aliquet
													vitae ultricies sit amet, porttitor id sapien. In hac
													habitasse platea dictumst. Donec pharetra gravida augue
													at hendrerit. Cras Lorem ipsum dolor sit amet conse
													ctetur adipisicing elit, sed do eiusmod tempor
													incididunt ut labore et dolore magna. Ipsum dolor sit
													amet conse ctetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="txt3">- Andreas wolf, Company Name</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial_inner clearfix">
											<figure><img src="images/team05.jpg" alt="" class="img">
											</figure>
											<div class="caption">
												<div class="txt1">Ipsum dolor sit amet conse ctetur
													adipisicing elit</div>
												<div class="txt2">Nulla ultricies enim aliquet augue
													eleifend iaculis. Nam sollicitudin ligula ac nisi
													iaculis eu scelerisque risus ultricies. Nullam eu elit
													risus, vel interdum urna. Aenean leo nulla, aliquet
													vitae ultricies sit amet, porttitor id sapien. In hac
													habitasse platea dictumst. Donec pharetra gravida augue
													at hendrerit. Cras Lorem ipsum dolor sit amet conse
													ctetur adipisicing elit, sed do eiusmod tempor
													incididunt ut labore et dolore magna. Ipsum dolor sit
													amet conse ctetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua.
												</div>
												<div class="txt3">- Monica winc, Company Name</div>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>

				<div class="pagination5" id="slider5_pag"></div>

			</div>

			<div class="text-center"><a href="#" class="button2">Read More testimonials</a></div>

		<