@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Customers</h3>
	<a href="{{url('seller-add-customer')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Customer</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="1">Name</option>
						<option value="2">Contact No</option>
						<option value="3">Address</option>

					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Contact No</th>
							<th>Address</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_customers))
						@foreach($all_customers as $key => $customer)
							<tr>
								<td>{{$key}}</td>
								<td>{{$customer->customer_name}}</td>
								<td>{{$customer->contact_no}}</td>
								<td>{{$customer->address}}</td>

								<td>
									<a href="seller-edit-customer/{{$customer->id}}" class="btn btn-info">Edit</a>
									<a href="seller-delete-customer/{{$customer->id}}" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection