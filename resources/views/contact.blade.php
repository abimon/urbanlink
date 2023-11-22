@extends('layouts.app')
@section('content')
<div id="content">
	<div class="container">
		<div class="row">
			<div class="span7">

				<h2><span>Our Location</span></h2>

				<figure class="google_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d997.2725237780866!2d37.01855882921568!3d-1.0947136590900044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMDUnNDEuMCJTIDM3wrAwMScwOC44IkU!5e0!3m2!1sen!2ske!4v1678204015392!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</figure>
			</div>
			<div class="span3">

				<h2><span>Contact Us</span></h2>

				<ul style="text-decoration:none;">
					<li style="list-style: none;font-size:large;">Apek Real Estate Agencies</li>
					<hr>
					<li style="list-style: none;"><a href="tel:+254701583807" style="text-decoration: none; font-size:medium;color:black;"><i class="bi bi-phone"></i> +254 701 583 807</a></li>
					<hr>
					<li style="list-style: none;"><a href="https:apekrea.com" style="text-decoration: none; font-size:medium;color:black;"><i class="bi bi-globe"></i> www.apekrea.com</li>
					<hr>
					<li style="list-style: none;"><a href="mailto:info@apekrea.com" style="text-decoration: none; font-size:medium;color:black;"><i class="bi bi-envelope"></i> info@apekrea.com</li>
					<hr>
					<li style="list-style: none;"><a href="https://wa.me/254701583807" style="text-decoration: none; font-size:medium;color:black;"><i class="bi bi-whatsapp"></i> Whatsapp ApekREA</li>
					<hr>
				</ul>
				
			</div>
		</div>

		<div class="row">
			<div class="span12">

				<h2 class="center"><span>Contact form</span></h2>

				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
						<div class="row">
							<div class="span4">
								<div class="control-group">
									<label class="control-label" for="inputName">Your full name:</label>
									<div class="controls">
										<input class="span4" type="text" id="inputName" name="name" value="Your full name:" onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Your email:</label>
									<div class="controls">
										<input class="span4" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'" onFocus="if(this.value =='Your email:' ) this.value=''">
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="control-group">
									<label class="control-label" for="inputPhone">Phone number:</label>
									<div class="controls">
										<input class="span4" type="text" id="inputPhone" name="phone" value="Phone number:" onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<div class="control-group">
									<label class="control-label" for="inputMessage">Message:</label>
									<div class="controls">
										<textarea class="span12" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'" onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="submit">Submit</button>
					</form>
				</div>





			</div>
		</div>





	</div>
</div>
@endsection