@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Products</h3>
	<a href="{{url('seller-add-product')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add product</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex ">
			<div class="card flex-fill"  style="overflow-x:scroll !important;">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="1">Product Name</option>
						<option value="2">Description</option>
						<option value="3">Color</option>
						<option value="4">Size</option>
						<option value="5">Delivery</option>
						<option value="6">Publication Status</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead >
						<tr>
							<th>Sr #</th>
							<th>Product Name</th>
							<th>Sale Price</th>
							<th>Quantity</th>
							<th>Sale Type</th>
							<th>Disscount</th>
							<th>Image</th>
							<th>Lable</th>
							<th>Description</th>
							<th>Color</th>
							<th>Size</th>
							<th>Warrenty</th>
							<th>Warrenty Period</th>
							<th>Delivery</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Delivery Charges</th>
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody class="overflow-x: scroll">
						@if(!empty($all_products))
						@foreach($all_products as $key => $product)
							<tr>
								<td>{{$key}}</td>
								<td>{{$product->product_name}}</td>
								<td>{{$product->sale_price}}</td>
								<td>{{$product->quantity}}</td>
								<td>{{$product->sale_type}}</td>
								<td>{{$product->discount}}</td>
								<td>{{$product->product_image_1}}</td>
								<td>{{$product->lable}}</td>
								<td>{{$product->description}}</td>
								<td>{{$product->color}}</td>
								<td>{{$product->size}}</td>
								<td>{{$product->warrenty}}</td>
								<td>{{$product->warrenty_period}}</td>
								<td>{{$product->develivery}}</td>
								<td>{{$product->delivery_charges}}</td>



								@if($product->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									<a href="seller-edit-brand/{{$product->id}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="seller-delete-product/{{$product->id}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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