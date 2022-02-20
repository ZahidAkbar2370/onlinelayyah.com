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
						<h3 style="background-color:green">
							@if(!empty($successMessage))
						 		{{$successMessage}} 
						 	@endif
						</h3>
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
									@csrf
									<div class="row">
										
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>First Name<span>*</span></label>
												<input name="first_name" type="text" placeholder="Enter Your First Name" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Last Name<span>*</span></label>
												<input name="last_name" type="text" placeholder="Enter Your Last Name" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Mobile Number<span>*</span></label>
												<input name="mobile_no" type="number" placeholder="Enter Your Mobile Number" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Whatsapp Number</label>
												<input name="whatsapp_no" type="number" placeholder="Enter Your Whatsapp Number">
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
												<br>
												<select name="categorey_id" style="width: 100%;">
													<option value="">Select Shop Categorey</option>
													<option value="1">Mobile Shop</option>
													<option value="2">Laptop Shop</option>
													<option value="3">Accessories</option>
													<option value="4">Garments</option>
												</select>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Shop Name<span>*</span></label>
												<input name="shop_name" type="text" placeholder="Enter Your Shop Name" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Address<span>*</span></label>
												<input name="address" type="text" placeholder="Enter Your Address" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your City<span>*</span></label>
												<input name="city" type="text" placeholder="Enter Your City" required>
											</div>	
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Your Profile Image<span>*</span></label>
												<input name="profile_image" type="file" placeholder="Upload Your Profile Image" required>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group message">
												<label>Your Cover Photo<span>*</span></label>
												<input name="cover_photo" type="file" placeholder="Upload Your Cover Photo" required>
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
												<label>Your Account Type<span>*</span></label><br>
												<select name="account_type">
													<option value="">Select Account type</option>
													<option value="jazzcash">Jazz Cash</option>
													<option value="easypassa">Easypassa</option>
													<option value="bank_account">Bank Account</option>
												</select>
											</div>
										</div>
										<div class="col-lg-4 col-12">
											<div class="form-group">
												<label>Your Bank Name<span>*</span></label>
												<input name="bank_name" type="text" placeholder="Enter Your Bank Name">
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