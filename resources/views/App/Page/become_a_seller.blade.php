@extends('App.app_layout')
@section('content')


<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{url('become-a-seller')}}">Become a Seller</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title text-center">
									<h4>Welcome To Online System</h4>
									<h1>Rregister Your Buisness</h1>
								</div>
								<div class="row">
									<div class="title">
										<h5>Personal Information</h5>
									</div>
								</div>
								<form class="form" method="post" action="">
									<div class="row">
										
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>
										</div>
										<!-- <div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Register</button>
											</div>
										</div> -->
									</div>

									<div class="row">
										<div class="title">
											<h5>Business Information</h5>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="title">
											<h5>Account Detail</h5>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Register</button>
											</div>
										</div>
									</div>	
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- <div class="map-section">
		<div id="myMap"></div>
	</div> -->

@endsection