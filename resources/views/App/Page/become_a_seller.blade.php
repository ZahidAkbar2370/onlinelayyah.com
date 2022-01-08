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
								<form class="form" method="post" action="{{URL::to('become-a-seller')}}">
									<div class="row">
										
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>First Name<span>*</span></label>
												<input name="first_name" type="text" placeholder="Enter Your First Name">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Last Name<span>*</span></label>
												<input name="last_name" type="text" placeholder="Enter Your Last Name">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Mobile Number<span>*</span></label>
												<input name="mobile_no" type="email" placeholder="Enter Your Mobile Number ">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Whatsapp Number<span>*</span></label>
												<input name="whatsapp_no" type="text" placeholder="Enter Your Whatsapp Number">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Address<span>*</span></label>
												<input name="address" type="text" placeholder="Enter Your Address">
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Email<span>*</span></label>
												<input name="email" type="email" placeholder="Enter Your Email">
											</div>
										</div>

										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Password<span>*</span></label>
												<input name="password" type="password" placeholder="Enter Your Password">
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
												<label>Your Product Categorey<span>*</span></label>
												<input name="categorey_id" type="text" placeholder="Enter Your Product Categorey">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Shop Name<span>*</span></label>
												<input name="shop_name" type="text" placeholder="Enter Your Shop Name">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Address<span>*</span></label>
												<input name="address" type="text" placeholder="Enter Your Address">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your City<span>*</span></label>
												<input name="city" type="text" placeholder="Enter Your City">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Your Profile Image<span>*</span></label>
												<input name="profile_image" type="file" placeholder="Upload Your Profile Image">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Your Cover Photo<span>*</span></label>
												<input name="cover_photo" type="file" placeholder="Upload Your Cover Photo">
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
												<label>Your Account Holder Name<span>*</span></label>
												<input name="account_holder_name" type="text" placeholder="Enter Your Account Holder Name">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Account Type<span>*</span></label>
												<input name="account_type" type="text" placeholder="Enter Your Account Type">
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Bank Name<span>*</span></label>
												<input name="bank_name" type="email" placeholder="Enter Your Bank Name">
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Account Number<span>*</span></label>
												<input name="account_no" type="number" placeholder="Enter Your Account Number">
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