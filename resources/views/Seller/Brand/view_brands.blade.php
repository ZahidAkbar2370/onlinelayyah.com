@extends("Seller.seller_panel")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Brands</h3>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">

				<div class="card-header">
					<a href="{{url('seller-add-brand')}}"><button class="btn btn-primary">Add Brand</button></a>
				</div>
				
				<table class="table table-hover my-0">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($all_brands))
						@foreach($all_brands as $key => $brand)
							<tr>
								<td>{{$key}}</td>
								<td>{{$brand->brand_name}}</td>
								@if($brand->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									<a href="seller-edit-brand/{{$brand->id}}" class="btn btn-info">Edit</a>
									<a href="seller-delete-brand/{{$brand->id}}" class="btn btn-danger">Delete</a>
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